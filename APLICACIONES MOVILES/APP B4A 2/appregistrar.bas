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
	Private usuariosregistro As usuario
End Sub

Sub Globals
	'These global variables will be redeclared each time the activity is created.
	'These variables can only be accessed from this module.

	Private btncancelar As Button
	Private btnregistrar As Button
	Private nbedad As EditText
	Private txtapellidos As EditText
	Private txtcontraseña As EditText
	Private txtemail As EditText
	Private txtnom_usuario As EditText
	Private txtnombre As EditText
	Private txtvcontraseña As EditText
End Sub

Sub Activity_Create(FirstTime As Boolean)
	'Do not forget to load the layout file created with the visual designer. For example:
	Activity.LoadLayout("appregistrarse")
	usuariosregistro.Initialize
End Sub

Sub Activity_Resume

End Sub

Sub Activity_Pause (UserClosed As Boolean)

End Sub


Sub btnregistrar_Click
	
	If usuariosregistro.nuevousu(txtnombre.Text,txtapellidos.Text,txtnom_usuario.Text,txtvcontraseña.Text,txtemail.Text,nbedad.Text) Then
		Activity.Finish
		StartActivity(Main)
	Else
		Msgbox("Error no se registro nuevo ususario","Error")
	End If
End Sub

Sub btncancelar_Click
	Activity.Finish
	StartActivity(Main)
End Sub