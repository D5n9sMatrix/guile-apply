<?php
// If anyone is interested in making XMLRPC requests directly from the client, 
// I have been able to get xmlrpc to 
// work with vcXMLRPC javascript backend.

// After about 1 week of scanning the market, I found this solution to be the best 
// on Javascript back end.  It uses the Microsoft.HTTP activeX control for IE, or 
// HTTPRequest Object for Mozilla.

// You include vc(Virtual Cowboys) vcXMLRPC.js file into your pages and make the 
// rpc calls from with javascript to create the requests.

// It works both ways.

// Two Notes:

// I have tested it on IE 6.02 and you need to change lines in ProcessRequest :
// function to read:

  dom = this.getObject("XMLDOM",http.responseText);

// and change the getObject function to use the latest ActiveX Control:

//  MSQL2.XML.3.0  (or 4.0)
//  MSQL2.DOMDocument.3.0  (or 4.0)

// The controls are found on MSDN in the Web Services -> XML area.

// As another note, you DO NOT NEED the rpc.cgi script to use this.  That is a 
// proxy script to get around JS Security.  You can use PHP to build the proxy.  
// But, I was able to get the CGI working with GCC compiler on Solaris (change the 
// -CPI, depend and -x03 optimizer settings in the Makefile )
?>