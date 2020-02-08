function encode (str) {
 let k=createKey(16);
  key = CryptoJS.enc.Utf8.parse(k);
  let v=createKey(16);
  iv = CryptoJS.enc.Utf8.parse(v);
  var encrypted = CryptoJS.AES.encrypt(str, key, {
    iv: iv,
    mode: CryptoJS.mode.CBC,
    padding: CryptoJS.pad.ZeroPadding
  });
  let t= new Date().getTime();
  let datas='{"a":"'+k+'","b":"'+v+'","d":"'+encrypted+'","t":"'+t+'"}';
  datas=CryptoJS.enc.Utf8.parse(datas);
  let r= CryptoJS.enc.Base64.stringify(datas);
  return r;
}
function createKey(len){
　len = len || 32;
  var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz12345678';
  var maxPos = $chars.length;
  var pwd = '';
  for (i = 0; i < len; i++) {
    pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
  }
  return pwd;
}


