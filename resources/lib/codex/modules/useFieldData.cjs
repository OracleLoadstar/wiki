"use strict";const t=require("vue"),s=require("./useComputedDisabled.cjs"),c=require("./constants.js");function v(d,e,i){const l=s(d),o=t.inject(c.FieldStatusKey,t.ref("default")),a=t.computed(()=>e!=null&&e.value&&e.value!=="default"?e.value:o.value),u=t.inject(c.FieldInputIdKey,void 0),r=t.computed(()=>{var n;return(n=u==null?void 0:u.value)!=null?n:i});return{computedDisabled:l,computedStatus:a,computedInputId:r}}module.exports=v;