/*! gruntyplate - v0.1.0 - 2015-08-12
* Copyright (c) 2015 Gruntyplate;*/

var app={},gifZone=angular.module("gifZone",[]);gifZone.controller("GifZoneListing",["$scope","$http",function(a,b){a.selected_order="-date",b.get("/wp-json/wp/v2/gifs?per_page=30").success(function(b){for(var c=0;c<b.length;c++)for(b[c].category=b[c].custom_fields.gif_category,b[c].tag="",j=0;j<b[c].custom_fields.gif_tags.length;j++)b[c].tag+=b[c].custom_fields.gif_tags[j].slug;a.gifs=b})}]);
//# sourceMappingURL=application.js.map