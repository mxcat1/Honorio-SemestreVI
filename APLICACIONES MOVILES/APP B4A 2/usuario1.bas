B4A=true
Group=Default Group
ModulesStructureVersion=1
Type=StaticCode
Version=8.3
@EndOfDesignText@
'Code module
'Subs in this code module will be accessible from all modules.
Sub Process_Globals
	'These global variables will be declared once when the application starts.
	'These variables can be accessed from all modules.
	Public nomusuario,nombre,apellidos,contraseña,email As String
	Public edad,idusu As Int
	Private cone As SQL
	Private login As Cursor
End Sub
Public Sub logueo(nom_usu As String, pass As String) As Boolean
	Dim pasa As Boolean
	If cone.IsInitialized Then
		cone.Initialize(File.DirDefaultExternal,"bdhonorio.db",False)
	End If
	login=cone.ExecQuery2("SELECT * FROM usuarios WHERE nom_usuario=? AND pass=?",Array As String(nom_usu,pass))
	login.Position=0
	If login.RowCount>0 Then
		pasa=True
	Else
		pasa=False
	End If
	login.Close
	cone.Close

	Return pasa
End Sub
