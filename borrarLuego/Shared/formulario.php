<?
	class formulario
	{	
		protected function encabezadoShow($titulo)
		{
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title><? echo $titulo ?></title>
			</head>			
			<body>
			<table width="413" border="0" align="center">
               <tr>
                 <td colspan="3"><img src="./img/banner.jpg" width="640" height="180" /></td>
               </tr>
             </table>
			<?
		}
		
		
		protected function piePaginaShow()
		{
			?>
				<footer>King&Queen</footer>
			</body>
			</html>
			<?
		}	
	}
?>