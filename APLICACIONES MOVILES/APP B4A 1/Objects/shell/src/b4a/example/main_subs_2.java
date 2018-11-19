package b4a.example;

import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.pc.*;

public class main_subs_2 {


public static RemoteObject  _activity_create(RemoteObject _firsttime) throws Exception{
try {
		Debug.PushSubsStack("Activity_Create (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,34);
if (RapidSub.canDelegate("activity_create")) { return b4a.example.main.remoteMe.runUserSub(false, "main","activity_create", _firsttime);}
Debug.locals.put("FirstTime", _firsttime);
 BA.debugLineNum = 34;BA.debugLine="Sub Activity_Create(FirstTime As Boolean)";
Debug.ShouldStop(2);
 BA.debugLineNum = 36;BA.debugLine="Activity.LoadLayout(\"appLogin\")";
Debug.ShouldStop(8);
main.mostCurrent._activity.runMethodAndSync(false,"LoadLayout",(Object)(RemoteObject.createImmutable("appLogin")),main.mostCurrent.activityBA);
 BA.debugLineNum = 37;BA.debugLine="If File.Exists(File.DirDefaultExternal,\"bdapp.db\"";
Debug.ShouldStop(16);
if (RemoteObject.solveBoolean("=",main.mostCurrent.__c.getField(false,"File").runMethod(true,"Exists",(Object)(main.mostCurrent.__c.getField(false,"File").runMethod(true,"getDirDefaultExternal")),(Object)(RemoteObject.createImmutable("bdapp.db"))),main.mostCurrent.__c.getField(true,"False"))) { 
 BA.debugLineNum = 38;BA.debugLine="File.Copy(File.DirAssets,\"bdapp.db\",File.DirDefa";
Debug.ShouldStop(32);
main.mostCurrent.__c.getField(false,"File").runVoidMethod ("Copy",(Object)(main.mostCurrent.__c.getField(false,"File").runMethod(true,"getDirAssets")),(Object)(BA.ObjectToString("bdapp.db")),(Object)(main.mostCurrent.__c.getField(false,"File").runMethod(true,"getDirDefaultExternal")),(Object)(RemoteObject.createImmutable("bdapp.db")));
 };
 BA.debugLineNum = 41;BA.debugLine="If bdapp.IsInitialized=False Then";
Debug.ShouldStop(256);
if (RemoteObject.solveBoolean("=",main._bdapp.runMethod(true,"IsInitialized"),main.mostCurrent.__c.getField(true,"False"))) { 
 BA.debugLineNum = 42;BA.debugLine="bdapp.Initialize(File.DirDefaultExternal,\"bdapp.";
Debug.ShouldStop(512);
main._bdapp.runVoidMethod ("Initialize",(Object)(main.mostCurrent.__c.getField(false,"File").runMethod(true,"getDirDefaultExternal")),(Object)(BA.ObjectToString("bdapp.db")),(Object)(main.mostCurrent.__c.getField(true,"False")));
 };
 BA.debugLineNum = 45;BA.debugLine="End Sub";
Debug.ShouldStop(4096);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _activity_pause(RemoteObject _userclosed) throws Exception{
try {
		Debug.PushSubsStack("Activity_Pause (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,51);
if (RapidSub.canDelegate("activity_pause")) { return b4a.example.main.remoteMe.runUserSub(false, "main","activity_pause", _userclosed);}
Debug.locals.put("UserClosed", _userclosed);
 BA.debugLineNum = 51;BA.debugLine="Sub Activity_Pause (UserClosed As Boolean)";
Debug.ShouldStop(262144);
 BA.debugLineNum = 53;BA.debugLine="End Sub";
Debug.ShouldStop(1048576);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _activity_resume() throws Exception{
try {
		Debug.PushSubsStack("Activity_Resume (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,47);
if (RapidSub.canDelegate("activity_resume")) { return b4a.example.main.remoteMe.runUserSub(false, "main","activity_resume");}
 BA.debugLineNum = 47;BA.debugLine="Sub Activity_Resume";
Debug.ShouldStop(16384);
 BA.debugLineNum = 49;BA.debugLine="End Sub";
Debug.ShouldStop(65536);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btnacceder_click() throws Exception{
try {
		Debug.PushSubsStack("btnacceder_Click (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,56);
if (RapidSub.canDelegate("btnacceder_click")) { return b4a.example.main.remoteMe.runUserSub(false, "main","btnacceder_click");}
 BA.debugLineNum = 56;BA.debugLine="Sub btnacceder_Click";
Debug.ShouldStop(8388608);
 BA.debugLineNum = 57;BA.debugLine="verificar_campos";
Debug.ShouldStop(16777216);
_verificar_campos();
 BA.debugLineNum = 58;BA.debugLine="End Sub";
Debug.ShouldStop(33554432);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btnregistrar_click() throws Exception{
try {
		Debug.PushSubsStack("btnregistrar_Click (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,60);
if (RapidSub.canDelegate("btnregistrar_click")) { return b4a.example.main.remoteMe.runUserSub(false, "main","btnregistrar_click");}
 BA.debugLineNum = 60;BA.debugLine="Sub btnregistrar_Click";
Debug.ShouldStop(134217728);
 BA.debugLineNum = 62;BA.debugLine="End Sub";
Debug.ShouldStop(536870912);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _globals() throws Exception{
 //BA.debugLineNum = 22;BA.debugLine="Sub Globals";
 //BA.debugLineNum = 26;BA.debugLine="Private txtnusuario As EditText";
main.mostCurrent._txtnusuario = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 27;BA.debugLine="Private txtpassword As EditText";
main.mostCurrent._txtpassword = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 28;BA.debugLine="Private btnacceder As Button";
main.mostCurrent._btnacceder = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 29;BA.debugLine="Private btnregistrar As Button";
main.mostCurrent._btnregistrar = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 30;BA.debugLine="Dim login As Cursor";
main.mostCurrent._login = RemoteObject.createNew ("anywheresoftware.b4a.sql.SQL.CursorWrapper");
 //BA.debugLineNum = 31;BA.debugLine="Dim nombre_usu, nom_usu,pass_usu As String";
main.mostCurrent._nombre_usu = RemoteObject.createImmutable("");
main.mostCurrent._nom_usu = RemoteObject.createImmutable("");
main.mostCurrent._pass_usu = RemoteObject.createImmutable("");
 //BA.debugLineNum = 32;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}

public static void initializeProcessGlobals() {
    
    if (main.processGlobalsRun == false) {
	    main.processGlobalsRun = true;
		try {
		        main_subs_0._process_globals();
starter_subs_0._process_globals();
appprincipal_subs_0._process_globals();
main.myClass = BA.getDeviceClass ("b4a.example.main");
starter.myClass = BA.getDeviceClass ("b4a.example.starter");
appprincipal.myClass = BA.getDeviceClass ("b4a.example.appprincipal");
		
        } catch (Exception e) {
			throw new RuntimeException(e);
		}
    }
}public static RemoteObject  _process_globals() throws Exception{
 //BA.debugLineNum = 15;BA.debugLine="Sub Process_Globals";
 //BA.debugLineNum = 18;BA.debugLine="Public nombre_usuario As String";
main._nombre_usuario = RemoteObject.createImmutable("");
 //BA.debugLineNum = 19;BA.debugLine="Dim bdapp As SQL";
main._bdapp = RemoteObject.createNew ("anywheresoftware.b4a.sql.SQL");
 //BA.debugLineNum = 20;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
public static RemoteObject  _verificar_campos() throws Exception{
try {
		Debug.PushSubsStack("verificar_campos (main) ","main",0,main.mostCurrent.activityBA,main.mostCurrent,64);
if (RapidSub.canDelegate("verificar_campos")) { return b4a.example.main.remoteMe.runUserSub(false, "main","verificar_campos");}
 BA.debugLineNum = 64;BA.debugLine="Public Sub verificar_campos";
Debug.ShouldStop(-2147483648);
 BA.debugLineNum = 65;BA.debugLine="If txtnusuario.Text <>\"\" And txtpassword.Text <>\"";
Debug.ShouldStop(1);
if (RemoteObject.solveBoolean("!",main.mostCurrent._txtnusuario.runMethod(true,"getText"),BA.ObjectToString("")) && RemoteObject.solveBoolean("!",main.mostCurrent._txtpassword.runMethod(true,"getText"),BA.ObjectToString(""))) { 
 BA.debugLineNum = 66;BA.debugLine="nom_usu=txtnusuario.Text";
Debug.ShouldStop(2);
main.mostCurrent._nom_usu = main.mostCurrent._txtnusuario.runMethod(true,"getText");
 BA.debugLineNum = 67;BA.debugLine="pass_usu=txtpassword.Text";
Debug.ShouldStop(4);
main.mostCurrent._pass_usu = main.mostCurrent._txtpassword.runMethod(true,"getText");
 BA.debugLineNum = 68;BA.debugLine="login = bdapp.ExecQuery2(\"SELECT * FROM usuarios";
Debug.ShouldStop(8);
main.mostCurrent._login.setObject(main._bdapp.runMethod(false,"ExecQuery2",(Object)(BA.ObjectToString("SELECT * FROM usuarios where nom_usuario=? and pass_usuario=?")),(Object)(RemoteObject.createNewArray("String",new int[] {2},new Object[] {main.mostCurrent._nom_usu,main.mostCurrent._pass_usu}))));
 BA.debugLineNum = 69;BA.debugLine="If login.RowCount>0 Then";
Debug.ShouldStop(16);
if (RemoteObject.solveBoolean(">",main.mostCurrent._login.runMethod(true,"getRowCount"),BA.numberCast(double.class, 0))) { 
 BA.debugLineNum = 70;BA.debugLine="Msgbox(\"Usuario correcto\",\"Verificacion\")";
Debug.ShouldStop(32);
main.mostCurrent.__c.runVoidMethodAndSync ("Msgbox",(Object)(BA.ObjectToCharSequence("Usuario correcto")),(Object)(BA.ObjectToCharSequence(RemoteObject.createImmutable("Verificacion"))),main.mostCurrent.activityBA);
 BA.debugLineNum = 71;BA.debugLine="login.Position=0";
Debug.ShouldStop(64);
main.mostCurrent._login.runMethod(true,"setPosition",BA.numberCast(int.class, 0));
 BA.debugLineNum = 72;BA.debugLine="nombre_usu=login.GetString(\"nombre_usuario\")";
Debug.ShouldStop(128);
main.mostCurrent._nombre_usu = main.mostCurrent._login.runMethod(true,"GetString",(Object)(RemoteObject.createImmutable("nombre_usuario")));
 BA.debugLineNum = 73;BA.debugLine="nombre_usuario=nombre_usu";
Debug.ShouldStop(256);
main._nombre_usuario = main.mostCurrent._nombre_usu;
 BA.debugLineNum = 74;BA.debugLine="txtnusuario.Text=\"\"";
Debug.ShouldStop(512);
main.mostCurrent._txtnusuario.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 75;BA.debugLine="txtpassword.Text=\"\"";
Debug.ShouldStop(1024);
main.mostCurrent._txtpassword.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 76;BA.debugLine="StartActivity(appPrincipal)";
Debug.ShouldStop(2048);
main.mostCurrent.__c.runVoidMethod ("StartActivity",main.processBA,(Object)((main.mostCurrent._appprincipal.getObject())));
 }else {
 BA.debugLineNum = 78;BA.debugLine="Msgbox(\"Usuario o contraseña Incorrectos\",\"Veri";
Debug.ShouldStop(8192);
main.mostCurrent.__c.runVoidMethodAndSync ("Msgbox",(Object)(BA.ObjectToCharSequence("Usuario o contraseña Incorrectos")),(Object)(BA.ObjectToCharSequence(RemoteObject.createImmutable("Verificación"))),main.mostCurrent.activityBA);
 BA.debugLineNum = 79;BA.debugLine="txtnusuario.Text=\"\"";
Debug.ShouldStop(16384);
main.mostCurrent._txtnusuario.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 80;BA.debugLine="txtpassword.Text=\"\"";
Debug.ShouldStop(32768);
main.mostCurrent._txtpassword.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 81;BA.debugLine="txtnusuario.RequestFocus";
Debug.ShouldStop(65536);
main.mostCurrent._txtnusuario.runVoidMethod ("RequestFocus");
 };
 }else {
 BA.debugLineNum = 85;BA.debugLine="Msgbox(\"No se ingresaron datos\",\"Advertencia\")";
Debug.ShouldStop(1048576);
main.mostCurrent.__c.runVoidMethodAndSync ("Msgbox",(Object)(BA.ObjectToCharSequence("No se ingresaron datos")),(Object)(BA.ObjectToCharSequence(RemoteObject.createImmutable("Advertencia"))),main.mostCurrent.activityBA);
 BA.debugLineNum = 86;BA.debugLine="txtnusuario.Text=\"\"";
Debug.ShouldStop(2097152);
main.mostCurrent._txtnusuario.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 87;BA.debugLine="txtpassword.Text=\"\"";
Debug.ShouldStop(4194304);
main.mostCurrent._txtpassword.runMethodAndSync(true,"setText",BA.ObjectToCharSequence(""));
 BA.debugLineNum = 88;BA.debugLine="txtnusuario.RequestFocus";
Debug.ShouldStop(8388608);
main.mostCurrent._txtnusuario.runVoidMethod ("RequestFocus");
 };
 BA.debugLineNum = 90;BA.debugLine="End Sub";
Debug.ShouldStop(33554432);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
}