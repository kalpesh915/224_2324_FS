/*
    
*/
// outer
function add(){
    let counter = 1;

    // nested function
    function plus(){
        counter++;
    }
    plus();
    return counter;
}