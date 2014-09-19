/**
 * Created by edesimone on 9/15/14.
 */
var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;

//String.prototype.doSomething = function(suffix) {
//    return this.indexOf(suffix, this.length - suffix.length) !== -1;
//};
//var result=txt.doSomething('YZ');

    /*no va*/
    /*function Validate() {
    if(document.forms[0].name.value == "")
    return true;
    else
    return false;
    }*/

   /* function Validate() {
        if(document.forms[0].name.value == "")
            return false;
        else
            return true;
    }
*/
    function Validate() {
    if(document.forms[0].firstname.value== "")
    return false;
    else
    return true;
    }
/*
    function Validate() {
        if(document.forms[0].name == "")
            return true;
        else
            return false;
    }*/



