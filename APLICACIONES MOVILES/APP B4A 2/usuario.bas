B4A=true
Group=Default Group
ModulesStructureVersion=1
Type=Class
Version=8.3
@EndOfDesignText@
Sub Class_Globals
	Public nomusuario,nombre,apellidos,contraseña,email As String
	Public edad,idusu As Int
	Private cone As conexion
End Sub

'Initializes the object. You can add parameters to this method if needed.
Public Sub Initialize
	cone.Initialize
End Sub

Public Sub logueo(nom_usu As String, pass As String) As Boolean
	Dim login As Cursor
	Dim pasa As Boolean
	cone.conectar
	login=cone.cone.ExecQuery2("SELECT * FROM usuarios WHERE nom_usuario=? AND pass=?",Array As String(nom_usu,pass))
	login.Position=0
	If login.RowCount>0 Then
		pasa=True
	Else
		pasa=False
	End If
	login.Close
	cone.desconectar

	Return pasa
End Sub
Public Sub datoslogin(nom_usu As String) As String()
	Dim datos(7) As String
	Dim login As Cursor
	
	cone.conectar
	login=cone.cone.ExecQuery2("SELECT * FROM usuarios WHERE nom_usuario=?",Array As String(nom_usu))
	If login.RowCount>0 Then
		login.Position=0
		datos(0)=login.GetInt("id_usuario")
		datos(1)=login.GetString("nombres")
		datos(2)=login.GetString("apellidos")
		datos(3)=login.GetString("nom_usuario")
		datos(4)=login.GetString("pass")
		datos(5)=login.GetString("email")
		datos(6)=login.GetInt("edad")
	Else
		datos(0)="Ningun Dato Encontrado"	
	End If
	cone.desconectar
	Return datos
	
End Sub
Public Sub nuevousu(nom As String,ape As String,nomusu As String,pass As String,emailusu As String,edadusu As Int) As Boolean
	cone.conectar
	Dim pasa As Boolean=True
	cone.cone.ExecNonQuery2("INSERT into usuarios (nombres, apellidos, nom_usuario, pass, email, edad) values (?,?,?,?,?,?)",Array As Object(nom,ape,nomusu,pass,emailusu,edadusu))
	
	If logueo(nomusu,pass) Then
		pasa=True
	Else
		pasa=False
	End If
	cone.desconectar
	Return pasa
End Sub
