package b4a.example;

import anywheresoftware.b4a.BA;
import anywheresoftware.b4a.pc.*;

public class appprincipal_subs_0 {


public static RemoteObject  _activity_create(RemoteObject _firsttime) throws Exception{
try {
		Debug.PushSubsStack("Activity_Create (appprincipal) ","appprincipal",2,appprincipal.mostCurrent.activityBA,appprincipal.mostCurrent,18);
if (RapidSub.canDelegate("activity_create")) { return b4a.example.appprincipal.remoteMe.runUserSub(false, "appprincipal","activity_create", _firsttime);}
Debug.locals.put("FirstTime", _firsttime);
 BA.debugLineNum = 18;BA.debugLine="Sub Activity_Create(FirstTime As Boolean)";
Debug.ShouldStop(131072);
 BA.debugLineNum = 20;BA.debugLine="Activity.LoadLayout(\"appPrincipal\")";
Debug.ShouldStop(524288);
appprincipal.mostCurrent._activity.runMethodAndSync(false,"LoadLayout",(Object)(RemoteObject.createImmutable("appPrincipal")),appprincipal.mostCurrent.activityBA);
 BA.debugLineNum = 21;BA.debugLine="Msgbox(Main.nombre_usuario,\"Alerta\")";
Debug.ShouldStop(1048576);
appprincipal.mostCurrent.__c.runVoidMethodAndSync ("Msgbox",(Object)(BA.ObjectToCharSequence(appprincipal.mostCurrent._main._nombre_usuario)),(Object)(BA.ObjectToCharSequence(RemoteObject.createImmutable("Alerta"))),appprincipal.mostCurrent.activityBA);
 BA.debugLineNum = 22;BA.debugLine="End Sub";
Debug.ShouldStop(2097152);
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
		Debug.PushSubsStack("Activity_Pause (appprincipal) ","appprincipal",2,appprincipal.mostCurrent.activityBA,appprincipal.mostCurrent,28);
if (RapidSub.canDelegate("activity_pause")) { return b4a.example.appprincipal.remoteMe.runUserSub(false, "appprincipal","activity_pause", _userclosed);}
Debug.locals.put("UserClosed", _userclosed);
 BA.debugLineNum = 28;BA.debugLine="Sub Activity_Pause (UserClosed As Boolean)";
Debug.ShouldStop(134217728);
 BA.debugLineNum = 30;BA.debugLine="End Sub";
Debug.ShouldStop(536870912);
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
		Debug.PushSubsStack("Activity_Resume (appprincipal) ","appprincipal",2,appprincipal.mostCurrent.activityBA,appprincipal.mostCurrent,24);
if (RapidSub.canDelegate("activity_resume")) { return b4a.example.appprincipal.remoteMe.runUserSub(false, "appprincipal","activity_resume");}
 BA.debugLineNum = 24;BA.debugLine="Sub Activity_Resume";
Debug.ShouldStop(8388608);
 BA.debugLineNum = 26;BA.debugLine="End Sub";
Debug.ShouldStop(33554432);
return RemoteObject.createImmutable("");
}
catch (Exception e) {
			throw Debug.ErrorCaught(e);
		} 
finally {
			Debug.PopSubsStack();
		}}
public static RemoteObject  _btncerrarsesion_click() throws Exception{
try {
		Debug.PushSubsStack("btncerrarsesion_Click (appprincipal) ","appprincipal",2,appprincipal.mostCurrent.activityBA,appprincipal.mostCurrent,33);
if (RapidSub.canDelegate("btncerrarsesion_click")) { return b4a.example.appprincipal.remoteMe.runUserSub(false, "appprincipal","btncerrarsesion_click");}
 BA.debugLineNum = 33;BA.debugLine="Sub btncerrarsesion_Click";
Debug.ShouldStop(1);
 BA.debugLineNum = 34;BA.debugLine="Activity.Finish";
Debug.ShouldStop(2);
appprincipal.mostCurrent._activity.runVoidMethod ("Finish");
 BA.debugLineNum = 35;BA.debugLine="Main.nombre_usuario=\"\"";
Debug.ShouldStop(4);
appprincipal.mostCurrent._main._nombre_usuario = BA.ObjectToString("");
 BA.debugLineNum = 36;BA.debugLine="StartActivity(Main)";
Debug.ShouldStop(8);
appprincipal.mostCurrent.__c.runVoidMethod ("StartActivity",appprincipal.processBA,(Object)((appprincipal.mostCurrent._main.getObject())));
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
public static RemoteObject  _globals() throws Exception{
 //BA.debugLineNum = 12;BA.debugLine="Sub Globals";
 //BA.debugLineNum = 15;BA.debugLine="Private btncerrarsesion As Button";
appprincipal.mostCurrent._btncerrarsesion = RemoteObject.createNew ("anywheresoftware.b4a.objects.ButtonWrapper");
 //BA.debugLineNum = 16;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
public static RemoteObject  _process_globals() throws Exception{
 //BA.debugLineNum = 6;BA.debugLine="Sub Process_Globals";
 //BA.debugLineNum = 10;BA.debugLine="End Sub";
return RemoteObject.createImmutable("");
}
}