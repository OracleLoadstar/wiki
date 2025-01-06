<?php

use MediaWiki\Specials\SpecialRedirect;

/**
 * Test class for SpecialRedirect class
 *
 * @since 1.32
 *
 * @license GPL-2.0-or-later
 * @group Database
 */
class SpecialRedirectTest extends MediaWikiIntegrationTestCase {

	private const CREATE_USER = 'create_user';

	/**
	 * @dataProvider provideDispatch
	 * @covers \MediaWiki\Specials\SpecialRedirect::dispatchUser
	 * @covers \MediaWiki\Specials\SpecialRedirect::dispatchFile
	 * @covers \MediaWiki\Specials\SpecialRedirect::dispatchRevision
	 * @covers \MediaWiki\Specials\SpecialRedirect::dispatchPage
	 * @covers \MediaWiki\Specials\SpecialRedirect::dispatchLog
	 */
	public function testDispatch( $method, $type, $value, $expectedStatus ) {
		$userFactory = $this->getServiceContainer()->getUserFactory();
		$page = new SpecialRedirect(
			$this->getServiceContainer()->getRepoGroup(),
			$userFactory
		);

		// setup the user object
		if ( $value === self::CREATE_USER ) {
			$user = $userFactory->newFromName( __CLASS__ );
			$user->addToDatabase();
			$value = $user->getId();
		}

		$page->setParameter( $type . '/' . $value );

		$status = $page->$method();
		$this->assertSame(
			$expectedStatus === 'good', $status->isGood(),
			$method . ' does not return expected status "' . $expectedStatus . '"'
		);
	}

	public static function provideDispatch() {
		foreach ( [
			[ 'nonumeric', 'fatal' ],
			[ '3', 'fatal' ],
			[ self::CREATE_USER, 'good' ],
		] as $dispatchUser ) {
			yield [ 'dispatchUser', 'user', $dispatchUser[0], $dispatchUser[1] ];
		}
		foreach ( [
			[ 'bad<name', 'fatal' ],
			[ 'File:Non-exists.jpg', 'fatal' ],
			// TODO Cannot test the good path here, because a file must exists
		] as $dispatchFile ) {
			yield [ 'dispatchFile', 'file', $dispatchFile[0], $dispatchFile[1] ];
		}
		foreach ( [
			[ 'nonumeric', 'fatal' ],
			[ '0', 'fatal' ],
			[ '1', 'good' ],
		] as $dispatch ) {
			yield [ 'dispatchRevision', 'revision', $dispatch[0], $dispatch[1] ];
			yield [ 'dispatchPage', 'revision', $dispatch[0], $dispatch[1] ];
			yield [ 'dispatchLog', 'log', $dispatch[0], $dispatch[1] ];
		}
	}

}
