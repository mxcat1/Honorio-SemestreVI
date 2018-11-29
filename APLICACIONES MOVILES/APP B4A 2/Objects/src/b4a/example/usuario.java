package b4a.example;


import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.B4AClass;
import anywheresoftware.b4a.BALayout;
import anywheresoftware.b4a.debug.*;

public class usuario extends B4AClass.ImplB4AClass implements BA.SubDelegator{
    private static java.util.HashMap<String, java.lang.reflect.Method> htSubs;
    private void innerInitialize(BA _ba) throws Exception {
        if (ba == null) {
            ba = new BA(_ba, this, htSubs, "b4a.example.usuario");
            if (htSubs == null) {
                ba.loadHtSubs(this.getClass());
                htSubs = ba.htSubs;
            }
            
        }
        if (BA.isShellModeRuntimeCheck(ba)) 
			   this.getClass().getMethod("_class_globals", b4a.example.usuario.class).invoke(this, new Object[] {null});
        else
            ba.raiseEvent2(null, true, "class_globals", false);
    }

 public anywheresoftware.b4a.keywords.Common __c = null;
public String _nomusuario = "";
public String _nombre = "";
public String _apellidos = "";
public String _contraseña = "";
public String _email = "";
public int _edad = 0;
public int _idusu = 0;
public b4a.example.conexion _cone = null;
public b4a.example.main _main = null;
public b4a.example.starter _starter = null;
public b4a.example.appregistrar _appregistrar = null;
public b4a.example.appusuario _appusuario = null;
public String  _class_globals() throws Exception{
 //BA.debugLineNum = 1;BA.debugLine="Sub Class_Globals";
 //BA.debugLineNum = 2;BA.debugLine="Public nomusuario,nombre,apellidos,contraseña,ema";
_nomusuario = "";
_nombre = "";
_apellidos = "";
_contraseña = "";
_email = "";
 //BA.debugLineNum = 3;BA.debugLine="Public edad,idusu As Int";
_edad = 0;
_idusu = 0;
 //BA.debugLineNum = 4;BA.debugLine="Private cone As conexion";
_cone = new b4a.example.conexion();
 //BA.debugLineNum = 5;BA.debugLine="End Sub";
return "";
}
public String[]  _datoslogin(String _nom_usu) throws Exception{
String[] _datos = null;
anywheresoftware.b4a.sql.SQL.CursorWrapper _login = null;
 //BA.debugLineNum = 28;BA.debugLine="Public Sub datoslogin(nom_usu As String) As String";
 //BA.debugLineNum = 29;BA.debugLine="Dim datos(7) As String";
_datos = new String[(int) (7)];
java.util.Arrays.fill(_datos,"");
 //BA.debugLineNum = 30;BA.debugLine="Dim login As Cursor";
_login = new anywheresoftware.b4a.sql.SQL.CursorWrapper();
 //BA.debugLineNum = 32;BA.debugLine="cone.conectar";
_cone._conectar();
 //BA.debugLineNum = 33;BA.debugLine="login=cone.cone.ExecQuery2(\"SELECT * FROM usuario";
_login.setObject((android.database.Cursor)(_cone._cone.ExecQuery2("SELECT * FROM usuarios WHERE nom_usuario=?",new String[]{_nom_usu})));
 //BA.debugLineNum = 34;BA.debugLine="If login.RowCount>0 Then";
if (_login.getRowCount()>0) { 
 //BA.debugLineNum = 35;BA.debugLine="login.Position=0";
_login.setPosition((int) (0));
 //BA.debugLineNum = 36;BA.debugLine="datos(0)=login.GetInt(\"id_usuario\")";
_datos[(int) (0)] = BA.NumberToString(_login.GetInt("id_usuario"));
 //BA.debugLineNum = 37;BA.debugLine="datos(1)=login.GetString(\"nombres\")";
_datos[(int) (1)] = _login.GetString("nombres");
 //BA.debugLineNum = 38;BA.debugLine="datos(2)=login.GetString(\"apellidos\")";
_datos[(int) (2)] = _login.GetString("apellidos");
 //BA.debugLineNum = 39;BA.debugLine="datos(3)=login.GetString(\"nom_usuario\")";
_datos[(int) (3)] = _login.GetString("nom_usuario");
 //BA.debugLineNum = 40;BA.debugLine="datos(4)=login.GetString(\"pass\")";
_datos[(int) (4)] = _login.GetString("pass");
 //BA.debugLineNum = 41;BA.debugLine="datos(5)=login.GetString(\"email\")";
_datos[(int) (5)] = _login.GetString("email");
 //BA.debugLineNum = 42;BA.debugLine="datos(6)=login.GetInt(\"edad\")";
_datos[(int) (6)] = BA.NumberToString(_login.GetInt("edad"));
 }else {
 //BA.debugLineNum = 44;BA.debugLine="datos(0)=\"Ningun Dato Encontrado\"";
_datos[(int) (0)] = "Ningun Dato Encontrado";
 };
 //BA.debugLineNum = 46;BA.debugLine="cone.desconectar";
_cone._desconectar();
 //BA.debugLineNum = 47;BA.debugLine="Return datos";
if (true) return _datos;
 //BA.debugLineNum = 49;BA.debugLine="End Sub";
return null;
}
public String  _initialize(anywheresoftware.b4a.BA _ba) throws Exception{
innerInitialize(_ba);
 //BA.debugLineNum = 8;BA.debugLine="Public Sub Initialize";
 //BA.debugLineNum = 9;BA.debugLine="cone.Initialize";
_cone._initialize(ba);
 //BA.debugLineNum = 10;BA.debugLine="End Sub";
return "";
}
public boolean  _logueo(String _nom_usu,String _pass) throws Exception{
anywheresoftware.b4a.sql.SQL.CursorWrapper _login = null;
boolean _pasa = false;
 //BA.debugLineNum = 12;BA.debugLine="Public Sub logueo(nom_usu As String, pass As Strin";
 //BA.debugLineNum = 13;BA.debugLine="Dim login As Cursor";
_login = new anywheresoftware.b4a.sql.SQL.CursorWrapper();
 //BA.debugLineNum = 14;BA.debugLine="Dim pasa As Boolean";
_pasa = false;
 //BA.debugLineNum = 15;BA.debugLine="cone.conectar";
_cone._conectar();
 //BA.debugLineNum = 16;BA.debugLine="login=cone.cone.ExecQuery2(\"SELECT * FROM usuario";
_login.setObject((android.database.Cursor)(_cone._cone.ExecQuery2("SELECT * FROM usuarios WHERE nom_usuario=? AND pass=?",new String[]{_nom_usu,_pass})));
 //BA.debugLineNum = 17;BA.debugLine="login.Position=0";
_login.setPosition((int) (0));
 //BA.debugLineNum = 18;BA.debugLine="If login.RowCount>0 Then";
if (_login.getRowCount()>0) { 
 //BA.debugLineNum = 19;BA.debugLine="pasa=True";
_pasa = __c.True;
 }else {
 //BA.debugLineNum = 21;BA.debugLine="pasa=False";
_pasa = __c.False;
 };
 //BA.debugLineNum = 23;BA.debugLine="login.Close";
_login.Close();
 //BA.debugLineNum = 24;BA.debugLine="cone.desconectar";
_cone._desconectar();
 //BA.debugLineNum = 26;BA.debugLine="Return pasa";
if (true) return _pasa;
 //BA.debugLineNum = 27;BA.debugLine="End Sub";
return false;
}
public boolean  _nuevousu(String _nom,String _ape,String _nomusu,String _pass,String _emailusu,int _edadusu) throws Exception{
boolean _pasa = false;
 //BA.debugLineNum = 50;BA.debugLine="Public Sub nuevousu(nom As String,ape As String,no";
 //BA.debugLineNum = 51;BA.debugLine="cone.conectar";
_cone._conectar();
 //BA.debugLineNum = 52;BA.debugLine="Dim pasa As Boolean=True";
_pasa = __c.True;
 //BA.debugLineNum = 53;BA.debugLine="cone.cone.ExecNonQuery2(\"INSERT into usuarios (no";
_cone._cone.ExecNonQuery2("INSERT into usuarios (nombres, apellidos, nom_usuario, pass, email, edad) values (?,?,?,?,?,?)",anywheresoftware.b4a.keywords.Common.ArrayToList(new Object[]{(Object)(_nom),(Object)(_ape),(Object)(_nomusu),(Object)(_pass),(Object)(_emailusu),(Object)(_edadusu)}));
 //BA.debugLineNum = 55;BA.debugLine="If logueo(nomusu,pass) Then";
if (_logueo(_nomusu,_pass)) { 
 //BA.debugLineNum = 56;BA.debugLine="pasa=True";
_pasa = __c.True;
 }else {
 //BA.debugLineNum = 58;BA.debugLine="pasa=False";
_pasa = __c.False;
 };
 //BA.debugLineNum = 60;BA.debugLine="cone.desconectar";
_cone._desconectar();
 //BA.debugLineNum = 61;BA.debugLine="Return pasa";
if (true) return _pasa;
 //BA.debugLineNum = 62;BA.debugLine="End Sub";
return false;
}
public Object callSub(String sub, Object sender, Object[] args) throws Exception {
BA.senderHolder.set(sender);
return BA.SubDelegator.SubNotFound;
}
}
