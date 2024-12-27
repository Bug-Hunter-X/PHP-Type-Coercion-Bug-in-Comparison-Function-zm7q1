function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This is incorrect, it always returns true even if a and b are different
function bar(a,b){
  return a == b
}