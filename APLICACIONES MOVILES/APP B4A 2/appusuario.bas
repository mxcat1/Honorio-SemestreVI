B4A=true
Group=Default Group
ModulesStructureVersion=1
Type=Activity
Version=8.3
@EndOfDesignText@
#Region  Activity Attributes 
	#FullScreen: False
	#IncludeTitle: True
#End Region

Sub Process_Globals
	'These global variables will be declared once when the application starts.
	'These variables can be accessed from all modules.

End Sub

Sub Globals
	'These global variables will be redeclared each time the activity is created.
	'These variables can only be accessed from this module.

	Private btnnuevo As Button
	Private btnsalir As Button
	Private lblapes As Label
	Private lblemail As Label
	Private lblnom_usu As Label
	Private lblnombre As Label
	Private lblpass As Label
End Sub

Sub Activity_Create(FirstTime As Boolean)
	'Do not forget to load the layout file created with the visual designer. For example:
	Activity.LoadLayout("appusuarios")

End Sub

Sub Activity_Resume

End Sub

Sub Activity_Pause (UserClosed As Boolean)

End Sub


Sub btnsalir_Click
	Activity.Finish
	StartActivity(Main)
End Sub

Sub btnnuevo_Click
	Activity.Finish
	StartActivity(appregistrar)
End Sub