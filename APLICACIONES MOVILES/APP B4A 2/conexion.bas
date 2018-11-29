B4A=true
Group=Default Group
ModulesStructureVersion=1
Type=Class
Version=8.3
@EndOfDesignText@
Sub Class_Globals
	Public cone As SQL
End Sub

'Initializes the object. You can add parameters to this method if needed.
Public Sub Initialize
	
End Sub
Public Sub conectar
	If cone.IsInitialized=False Then
		cone.Initialize(File.DirDefaultExternal,"bdhonorio.db",False)
	End If
End Sub
Public Sub desconectar
	cone.Close
End Sub