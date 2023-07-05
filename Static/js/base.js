
//正则表达式封装

//账号
function is_username(str){
    return /^[\w-]{4,16}$/.test(str);
}
//密码
function is_password(str){
    return /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(str);
}
//邮箱
function is_email(str) {    
	return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(str.toLowerCase());
}

//是否移动端
function isMobile() {
  return /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
}

//是否微信端
function isWechat() {
  return /MicroMessenger/i.test(navigator.userAgent);
}