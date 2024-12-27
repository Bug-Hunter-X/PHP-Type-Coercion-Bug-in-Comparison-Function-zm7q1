function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//Correct solution using strict comparison
function bar(a,b){
  return a === b
}