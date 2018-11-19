package b4a.example;

import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.pc.*;

public class appregistrar_subs_0 {


public static RemoteObject  _activity_create(RemoteObject _firsttime) throws Exception{
try {
		Debug.PushSubsStack("Activity_Create (appregistrar) ","appregistrar",2,appregistrar.mostCurrent.activityBA,appregistrar.mostCurrent,27);
if (RapidSub.canDelegate("activity_create")) { return b4a.example.appregistrar.remoteMe.runUserSub(false, "appregistrar","activity_create", _firsttime);}
Debug.locals.put("FirstTime", _firsttime);
 BA.debugLineNum = 27;BA.debugLine="Sub Activity_Create(FirstTime As Boolean)";
Debug.ShouldStop(67108864);
 BA.debugLineNum = 29;BA.debugLine="Activity.LoadLayout(\"appregistrarse\")";
Debug.ShouldStop(268435456);
appregistrar.mostCurrent._activity.runMethodAndSync(false,"LoadLayout",(Object)(RemoteObject.createImmutable("appregistrarse")),appregistrar.mostCurrent.activityBA);
 BA.debugLineNum = 31;BA.debugLine="End Sub";
Debug.ShouldStop(1073741824);
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
		Debug.PushSubsStack("Activity_Pause (appregistrar) ","appregistrar",2,appregistrar.mostCurrent.activityBA,appregistrar.mostCurrent,37);
if (RapidSub.canDelegate("activity_pause")) { return b4a.example.appregistrar.remoteMe.runUserSub(false, "appregistrar","activity_pause", _userclosed);}
Debug.locals.put("UserClosed", _userclosed);
 BA.debugLineNum = 37;BA.debugLine="Sub Activity_Pause (UserClosed As Boolean)";
Debug.ShouldStop(16);
 BA.debugLineNum = 39;BA.debugLine="End Sub";
Debug.ShouldStop(64);
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
		Debug.PushSubsStack("Activity_Resume (appregistrar) ","appregistrar",2,appregistrar.mostCurrent.activityBA,appregistrar.mostCurrent,33);
if (RapidSub.canDelegate("activity_resume")) { return b4a.example.appregistrar.remoteMe.runUserSub(false, "appregistrar","activity_resume");}
 BA.debugLineNum = 33;BA.debugLine="Sub Activity_Resume";
Debug.ShouldStop(1);
 BA.debugLineNum = 35;BA.debugLine="End Sub";
Debug.ShouldStop(4);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btncancelar_click() throws Exception{
try {
		Debug.PushSubsStack("btncancelar_Click (appregistrar) ","appregistrar",2,appregistrar.mostCurrent.activityBA,appregistrar.mostCurrent,46);
if (RapidSub.canDelegate("btncancelar_click")) { return b4a.example.appregistrar.remoteMe.runUserSub(false, "appregistrar","btncancelar_click");}
 BA.debugLineNum = 46;BA.debugLine="Sub btncancelar_Click";
Debug.ShouldStop(8192);
 BA.debugLineNum = 47;BA.debugLine="Activity.Finish";
Debug.ShouldStop(16384);
appregistrar.mostCurrent._activity.runVoidMethod ("Finish");
 BA.debugLineNum = 48;BA.debugLine="StartActivity(Main)";
Debug.ShouldStop(32768);
appregistrar.mostCurrent.__c.runVoidMethod ("StartActivity",appregistrar.processBA,(Object)((appregistrar.mostCurrent._main.getObject())));
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
public static RemoteObject  _btnregistrar_click() throws Exception{
try {
		Debug.PushSubsStack("btnregistrar_Click (appregistrar) ","appregistrar",2,appregistrar.mostCurrent.activityBA,appregistrar.mostCurrent,42);
if (RapidSub.canDelegate("btnregistrar_click")) { return b4a.example.appregistrar.remoteMe.runUserSub(false, "appregistrar","btnregistrar_click");}
 BA.debugLineNum = 42;BA.debugLine="Sub btnregistrar_Click";
Debug.ShouldStop(512);
 BA.debugLineNum = 44;BA.debugLine="End Sub";
Debug.ShouldStop(2048);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _globals() throws Exception{
 //BA.debugLineNum = 12;BA.debugLine="Sub Globals";
 //BA.debugLineNum = 16;BA.debugLine="Private btncancelar As Button";
appregistrar.mostCurrent._btncancelar = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 17;BA.debugLine="Private btnregistrar As Button";
appregistrar.mostCurrent._btnregistrar = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 18;BA.debugLine="Private nbedad As EditText";
appregistrar.mostCurrent._nbedad = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 19;BA.debugLine="Private txtapellidos As EditText";
appregistrar.mostCurrent._txtapellidos = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 20;BA.debugLine="Private txtcontraseña As EditText";
appregistrar.mostCurrent._txtcontraseña = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 21;BA.debugLine="Private txtemail As EditText";
appregistrar.mostCurrent._txtemail = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 22;BA.debugLine="Private txtnom_usuario As EditText";
appregistrar.mostCurrent._txtnom_usuario = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 23;BA.debugLine="Private txtnombre As EditText";
appregistrar.mostCurrent._txtnombre = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 24;BA.debugLine="Private txtvcontraseña As EditText";
appregistrar.mostCurrent._txtvcontraseña = RemoteObject.createNew ("anywheresoftware.b4a.objects.EditTextWrapper");
 //BA.debugLineNum = 25;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
public static RemoteObject  _process_globals() throws Exception{
 //BA.debugLineNum = 6;BA.debugLine="Sub Process_Globals";
 //BA.debugLineNum = 10;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
}