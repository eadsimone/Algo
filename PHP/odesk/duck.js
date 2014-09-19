/**
 * Created by edesimone on 9/2/14.
 */
/*
 Prototypal Inheritance

 Without modifying Duck and performWhatDuckDoes, add the necessary functionality that will make performWhatDuckDoes do the following:

 1. Print "The ordinary duck quacks." if name is string ordinary.
 2. Print "The rubber duck squawks." if name is string rubber.
 3. Print "The $name duck keeps silent.", where $name is equal to the name parameter, in any other case.
 Sample Input
 name: "ordinary"
 Sample Output
 The ordinary duck quacks.
 Additional SamplesInput	Output
 name: "rubber"	The rubber duck squawks.
 name: "quiet"	The quiet duck keeps silent.
 */
function Duck(name) {
    this.name = name;
    this.whatDoes = this._selectWhatDuckDoes(name);
}

// Write your code here.
Duck.prototype = {
    name : null,
    _selectWhatDuckDoes : function(name){
        if(name=='ordinary'){
            return "The ordinary duck quacks.";
        }else if(name=='rubber'){
            return "The rubber duck squawks.";
        }else{
            return "The "+name+" duck keeps silent.";
        }
    },
    does : function(){
        return this._selectWhatDuckDoes(this.name);
    }
}

function performWhatDuckDoes(name) {

    var duckObject = new Duck(name);
    console.log(duckObject.does());

}

/*performWhatDuckDoes('ordinary');*/
//performWhatDuckDoes('rubber');
performWhatDuckDoes('nada');

/*----inheritence from web https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Inheritance_Revisited*/
// Do NOT call the performWhatDuckDoes function in the code
// you write. The system will call it automatically.
/*function A(a){
    this.varA = a;
}

// What is the purpose of including varA in the prototype when A.prototype.varA will always be shadowed by
// this.varA, given the definition of function A above?
A.prototype = {
    varA : null,  // Shouldn't we strike varA from the prototype as doing nothing?
    // perhaps intended as an optimization to allocate space in hidden classes?
    // https://developers.google.com/speed/articles/optimizing-javascript#Initializing instance variables
    // would be valid if varA wasn't being initialized uniquely for each instance
    doSomething : function(){
        // ...
    }
}*/
/*

function B(a, b){
    A.call(this, a);
    this.varB = b;
}
B.prototype = Object.create(A.prototype, {
    varB : {
        value: null,
        enumerable: true,
        configurable: true,
        writable: true
    },
    doSomething : {
        value: function(){ // override
            A.prototype.doSomething.apply(this, arguments); // call super
            // ...
        },
        enumerable: true,
        configurable: true,
        writable: true
    }
});
B.prototype.constructor = B;

var b = new B();
b.doSomething();*/
