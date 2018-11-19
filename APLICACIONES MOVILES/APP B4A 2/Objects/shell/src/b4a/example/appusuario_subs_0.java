package b4a.example;

import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.pc.*;

public class appusuario_subs_0 {


public static RemoteObject  _activity_create(RemoteObject _firsttime) throws Exception{
try {
		Debug.PushSubsStack("Activity_Create (appusuario) ","appusuario",3,appusuario.mostCurrent.activityBA,appusuario.mostCurrent,25);
if (RapidSub.canDelegate("activity_create")) { return b4a.example.appusuario.remoteMe.runUserSub(false, "appusuario","activity_create", _firsttime);}
Debug.locals.put("FirstTime", _firsttime);
 BA.debugLineNum = 25;BA.debugLine="Sub Activity_Create(FirstTime As Boolean)";
Debug.ShouldStop(16777216);
 BA.debugLineNum = 27;BA.debugLine="Activity.LoadLayout(\"appusuarios\")";
Debug.ShouldStop(67108864);
appusuario.mostCurrent._activity.runMethodAndSync(false,"LoadLayout",(Object)(RemoteObject.createImmutable("appusuarios")),appusuario.mostCurrent.activityBA);
 BA.debugLineNum = 29;BA.debugLine="End Sub";
Debug.ShouldStop(268435456);
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
		Debug.PushSubsStack("Activity_Pause (appusuario) ","appusuario",3,appusuario.mostCurrent.activityBA,appusuario.mostCurrent,35);
if (RapidSub.canDelegate("activity_pause")) { return b4a.example.appusuario.remoteMe.runUserSub(false, "appusuario","activity_pause", _userclosed);}
Debug.locals.put("UserClosed", _userclosed);
 BA.debugLineNum = 35;BA.debugLine="Sub Activity_Pause (UserClosed As Boolean)";
Debug.ShouldStop(4);
 BA.debugLineNum = 37;BA.debugLine="End Sub";
Debug.ShouldStop(16);
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
		Debug.PushSubsStack("Activity_Resume (appusuario) ","appusuario",3,appusuario.mostCurrent.activityBA,appusuario.mostCurrent,31);
if (RapidSub.canDelegate("activity_resume")) { return b4a.example.appusuario.remoteMe.runUserSub(false, "appusuario","activity_resume");}
 BA.debugLineNum = 31;BA.debugLine="Sub Activity_Resume";
Debug.ShouldStop(1073741824);
 BA.debugLineNum = 33;BA.debugLine="End Sub";
Debug.ShouldStop(1);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btnnuevo_click() throws Exception{
try {
		Debug.PushSubsStack("btnnuevo_Click (appusuario) ","appusuario",3,appusuario.mostCurrent.activityBA,appusuario.mostCurrent,45);
if (RapidSub.canDelegate("btnnuevo_click")) { return b4a.example.appusuario.remoteMe.runUserSub(false, "appusuario","btnnuevo_click");}
 BA.debugLineNum = 45;BA.debugLine="Sub btnnuevo_Click";
Debug.ShouldStop(4096);
 BA.debugLineNum = 46;BA.debugLine="Activity.Finish";
Debug.ShouldStop(8192);
appusuario.mostCurrent._activity.runVoidMethod ("Finish");
 BA.debugLineNum = 47;BA.debugLine="StartActivity(appregistrar)";
Debug.ShouldStop(16384);
appusuario.mostCurrent.__c.runVoidMethod ("StartActivity",appusuario.processBA,(Object)((appusuario.mostCurrent._appregistrar.getObject())));
 BA.debugLineNum = 48;BA.debugLine="End Sub";
Debug.ShouldStop(32768);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btnsalir_click() throws Exception{
try {
		Debug.PushSubsStack("btnsalir_Click (appusuario) ","appusuario",3,appusuario.mostCurrent.activityBA,appusuario.mostCurrent,40);
if (RapidSub.canDelegate("btnsalir_click")) { return b4a.example.appusuario.remoteMe.runUserSub(false, "appusuario","btnsalir_click");}
 BA.debugLineNum = 40;BA.debugLine="Sub btnsalir_Click";
Debug.ShouldStop(128);
 BA.debugLineNum = 41;BA.debugLine="Activity.Finish";
Debug.ShouldStop(256);
appusuario.mostCurrent._activity.runVoidMethod ("Finish");
 BA.debugLineNum = 42;BA.debugLine="StartActivity(Main)";
Debug.ShouldStop(512);
appusuario.mostCurrent.__c.runVoidMethod ("StartActivity",appusuario.processBA,(Object)((appusuario.mostCurrent._main.getObject())));
 BA.debugLineNum = 43;BA.debugLine="End Sub";
Debug.ShouldStop(1024);
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
 //BA.debugLineNum = 16;BA.debugLine="Private btnnuevo As Button";
appusuario.mostCurrent._btnnuevo = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 17;BA.debugLine="Private btnsalir As Button";
appusuario.mostCurrent._btnsalir = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 18;BA.debugLine="Private lblapes As Label";
appusuario.mostCurrent._lblapes = RemoteObject.createNew ("anywheresoftware.b4a.objects.LabelWrapper");
 //BA.debugLineNum = 19;BA.debugLine="Private lblemail As Label";
appusuario.mostCurrent._lblemail = RemoteObject.createNew ("anywheresoftware.b4a.objects.LabelWrapper");
 //BA.debugLineNum = 20;BA.debugLine="Private lblnom_usu As Label";
appusuario.mostCurrent._lblnom_usu = RemoteObject.createNew ("anywheresoftware.b4a.objects.LabelWrapper");
 //BA.debugLineNum = 21;BA.debugLine="Private lblnombre As Label";
appusuario.mostCurrent._lblnombre = RemoteObject.createNew ("anywheresoftware.b4a.objects.LabelWrapper");
 //BA.debugLineNum = 22;BA.debugLine="Private lblpass As Label";
appusuario.mostCurrent._lblpass = RemoteObject.createNew ("anywheresoftware.b4a.objects.LabelWrapper");
 //BA.debugLineNum = 23;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
public static RemoteObject  _process_globals() throws Exception{
 //BA.debugLineNum = 6;BA.debugLine="Sub Process_Globals";
 //BA.debugLineNum = 10;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
}