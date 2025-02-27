<?php 
/**
 * Seccion class
 */
class Session {
    public static function init(){
        if(version_compare(phpversion(),'5.4.0','<')){
            if(session_id()== ""){
                session_start();
            }
        }else {
            if(session_status()== PHP_SESSION_NONE){
                session_start();
            }
        }
    }
    public static function set($key,$val){
        $_SESSION[$key] = $val;
    }
    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        else{
            return false;
        }
    }
    public static function checkSession(){
        self::init(); // Gọi phương thức init() trong cùng lớp nếu nó là phương thức tĩnh
        if(self::get("login") === false){ // Kiểm tra xem biến "login" trong phiên có giá trị false không
            self::destroy(); // Hủy phiên
            header("Location: login.php"); // Chuyển hướng đến trang đăng nhập
        }
    }
    public static function checkLogon(){
        self ::init();
        if (self::get("login")== true){
            header("Location:index.php");
        }
    }
    public static function destroy(){
        session_destroy();
        header("Location:login.php");
    }
}
?>