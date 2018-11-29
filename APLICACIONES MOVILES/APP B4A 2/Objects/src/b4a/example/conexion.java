package b4a.example;


import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.B4AClass;
import anywheresoftware.b4a.BALayout;
import anywheresoftware.b4a.debug.*;

public class conexion extends B4AClass.ImplB4AClass implements BA.SubDelegator{
    private static java.util.HashMap<String, java.lang.reflect.Method> htSubs;
    private void innerInitialize(BA _ba) throws Exception {
        if (ba == null) {
            ba = new BA(_ba, this, htSubs, "b4a.example.conexion");
            if (htSubs == null) {
                ba.loadHtSubs(this.getClass());
                htSubs = ba.htSubs;
            }
            
        }
        if (BA.isShellModeRuntimeCheck(ba)) 
			   this.getClass().getMethod("_class_globals", b4a.example.conexion.class).invoke(this, new Object[] {null});
        else
            ba.raiseEvent2(null, true, "class_globals", false);
    }

 public anywheresoftware.b4a.keywords.Common __c = null;
public anywheresoftware.b4a.sql.SQL _cone = null;
public b4a.example.main _main = null;
public b4a.example.starter _starter = null;
public b4a.example.appregistrar _appregistrar = null;
public b4a.example.appusuario _appusuario = null;
public String  _class_globals() throws Exception{
 //BA.debugLineNum = 1;BA.debugLine="Sub Class_Globals";
 //BA.debugLineNum = 2;BA.debugLine="Public cone As SQL";
_cone = new anywheresoftware.b4a.sql.SQL();
 //BA.debugLineNum = 3;BA.debugLine="End Sub";
return "";
}
public String  _conectar() throws Exception{
 //BA.debugLineNum = 9;BA.debugLine="Public Sub conectar";
 //BA.debugLineNum = 10;BA.debugLine="If cone.IsInitialized=False Then";
if (_cone.IsInitialized()==__c.False) { 
 //BA.debugLineNum = 11;BA.debugLine="cone.Initialize(File.DirDefaultExternal,\"bdhonor";
_cone.Initialize(__c.File.getDirDefaultExternal(),"bdhonorio.db",__c.False);
 };
 //BA.debugLineNum = 13;BA.debugLine="End Sub";
return "";
}
public String  _desconectar() throws Exception{
 //BA.debugLineNum = 14;BA.debugLine="Public Sub desconectar";
 //BA.debugLineNum = 15;BA.debugLine="cone.Close";
_cone.Close();
 //BA.debugLineNum = 16;BA.debugLine="End Sub";
return "";
}
public String  _initialize(anywheresoftware.b4a.BA _ba) throws Exception{
innerInitialize(_ba);
 //BA.debugLineNum = 6;BA.debugLine="Public Sub Initialize";
 //BA.debugLineNum = 8;BA.debugLine="End Sub";
return "";
}
public Object callSub(String sub, Object sender, Object[] args) throws Exception {
BA.senderHolder.set(sender);
return BA.SubDelegator.SubNotFound;
}
}
