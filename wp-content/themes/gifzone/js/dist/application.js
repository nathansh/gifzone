/*! gruntyplate - v0.1.0 - 2015-08-13
* Copyright (c) 2015 Gruntyplate;*/

var app={},gifZone=angular.module("gifZone",[]);gifZone.controller("GifZoneListing",["$scope","$http",function(a,b){b.get().success(function(a){for(var b=0;b<a.length;b++)for(a[b].category=a[b].custom_fields.gif_category,a[b].tag="",j=0;j<a[b].custom_fields.gif_tags.length;j++)a[b].tag+=a[b].custom_fields.gif_tags[j].slug})}]);
//# sourceMappingURL=application.js.map