/**
 * Created by edesimone on 9/2/14.
 *

Write a function named countDays which takes a single parameter named dateInString which is a String in the form "MM.DD.YYYY", representing a real date value. The function should print to the console the number of days from the beginning of the year specified in dateInString until the date represented in dateInString. If the value of dateInString is invalid, the function should print "Bad format" to the console.

    Sample Input
dateInString: "01.15.2012"
Sample Output
15
Additional SamplesInput	Output
dateInString: "02.01.2014"	32
dateInString: "This is not a valid date"	Bad format

/*javascript count days*/
function countDays(daytimeInString) {

    var daytime = dateInString.split('.');
    var m=daytime[0],y=daytime[2],d=daytime[1];

    if( daytime.length == 3 && ( m > 0 && m < 13 && y > 0 && y < 32768 && d > 0 && d <= (new Date(y, m, 0)).getDate() ))
    {
        var formatted_date = daytime[2]+' '+daytime[0]+' '+daytime[1];
        var date1=new Date(formatted_date);
        var date2=new Date(daytime[2]+' 01 01');
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
        console.log(diffDays+1);

    } else {
        console.log('Bad format');
    }
}

/*var dateInString="01.15.2012";/*15*/
/*var dateInString="02.01.2014";/*32*/
var dateInString="This is not a valid date";/*	Bad format*/

countDays(dateInString) ;