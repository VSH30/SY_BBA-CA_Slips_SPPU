#Convert to Binary

tobin = function(n){
  if(n>1){
    tobin(as.integer(n/2))
  }
  cat(n%%2)
}

a = 8
tobin(a)

