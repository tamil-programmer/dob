document.cookie = "username=John Smith; path=/";
const d = document.cookie;


function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
      if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res
  }

  
  console.log(getCookie("naa"));
  const jan = getCookie("jan");
  
  console.log(jan);

 
