<?php
use modulos\util\util;
$dadosboleto = $this->dadosboleto;
require_once "libs/boletophp/include/funcoes_bradesco.php";
require "libs/boletophp/include/inc_bradesco.php";

// +----------------------------------------------------------------------+
// | BoletoPhp - Vers&atilde;o Beta |
// +----------------------------------------------------------------------+
// | Este arquivo est&aacute; disponível sob a Licen&ccedil;a GPL disponível pela Web |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License |
// | Você deve ter recebido uma c&oacute;pia da GNU Public License junto com |
// | esse pacote; se n&atilde;o, escreva para: |
// | |
// | Free Software Foundation, Inc. |
// | 59 Temple Place - Suite 330 |
// | Boston, MA 02111-1307, USA. |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora&ccedil;&otilde;es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do |
// | PHPBoleto de Jo&atilde;o Prado Maia e Pablo Martins F. Costa |
// | |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Equipe Coordena&ccedil;&atilde;o Projeto BoletoPhp: <boletophp@boletophp.com.br> |
// | Desenvolvimento Boleto Bradesco: Ramon Soares |
// +----------------------------------------------------------------------+
?>
<style type=text/css>
<!--
.cp {
	font: bold 10px Arial;
	color: black
}

<!--
.ti {
	font: 9px Arial, Helvetica, sans-serif
}

<!--
.ld {
	font: bold 15px Arial;
	color: #000000
}

<!--
.ct {
	FONT: 9px "Arial Narrow";
	COLOR: #000033
}

<!--
.cn {
	FONT: 9px Arial;
	COLOR: black
}

<!--
.bc {
	font: bold 20px Arial;
	color: #000000
}

<!--
.ld2 {
	font: bold 12px Arial;
	color: #000000
}
-->
	table, td
	{
		padding:0;
	}

</style>
<page backtop="7mm" backbottom="7mm" backleft="11mm" backright="10mm" style="font-size: 9px; font-weight: normal; color:#000033;">
	<table width="704" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td valign="top" class="cp">
				<div align="center">
					Instru&ccedil;&otilde;es de Impress&atilde;o
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top" class="cp">
				<div align="left" class="cabecalho">
					<ul>
						<li>
							Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (N&atilde;o use modo econ&ocirc;mico).
						</li>
						<li>
							Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens m&iacute;nimas &agrave; esquerda e &agrave; direita do formul&aacute;rio.
						</li>
						<li>Corte na linha indicada. N&atilde;o rasure, risque, fure ou dobre a regi&atilde;o onde se encontra o c&oacute;digo de barras.
						</li>
						<li>Caso n&atilde;o apare&ccedil;a o c&oacute;digo de barras no final, clique em F5 para atualizar esta tela.
						</li>
						<li>
						Caso tenha problemas ao imprimir, copie a seq&uuml;encia num&eacute;rica abaixo e pague no caixa eletr&ocirc;nico ou no internet banking:<br><br>
						<span style="font-size: 13px; font-weight: normal; color:#000033; padding:10px;">
							<div>Linha Digit&aacute;vel: &nbsp;<?php echo $dadosboleto["linha_digitavel"]?></div>
							<div>Valor: &nbsp;&nbsp;R$ <?php echo $dadosboleto["valor_boleto"]?></div>
						</span>
						</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<br />
	<br />

	<table cellspacing=0 cellpadding=0 border=0>
		<TBODY>
			<TR>
				<TD class=ct width=666><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/6.png width=665
					border=0></TD>
			</TR>
			<TR>
				<TD class=ct width=666><div align=right>
						<b class=cp>Recibo do Sacado</b>
					</div></TD>
			</tr>
		</tbody>
	</table>

	<table width=666 cellspacing=5 cellpadding=0 border=0>
		<tr>
			<td width=41></TD>
		</tr>
	</table>

	<table width=666 cellspacing=5 cellpadding=0 border=0 align=Default>
		<tr>
			<td width=41><IMG SRC="<?php echo APP_URL_PUBLIC . util::getParam('EMPRESA_LOGO', 'img/matriz.logo.png', $this->idFilial)?>"></td>
			<td class=ti width=455><?php echo $dadosboleto["identificacao"]; ?> <?php echo isset($dadosboleto["cpf_cnpj"]) ? "<br>".$dadosboleto["cpf_cnpj"] : '' ?><br>
			<?php echo $dadosboleto["endereco"]; ?><br>
			<?php echo $dadosboleto["cidade_uf"]; ?><br></td>
			<td align=RIGHT width=150 class=ti>&nbsp;</td>
		</tr>
	</table>
	<br />

	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=cp width=150>
				<span class="campo">
					<IMG src="<?php echo APP_URL_PUBLIC?>img/boletos/logobradesco.jpg" width="150" height="40" border=0>
				</span>
			</td>
			<td width=3 valign=bottom>
				<img height=22 src=<?php echo APP_URL_PUBLIC?>img/boletos/3.png width=2 border=0>
			</td>
			<td class=cpt width=58 valign=bottom>
				<div align=center>
					<font class=bc><?php echo $dadosboleto["codigo_banco_com_dv"]?></font>
				</div>
			</td>
			<td width=3 valign=bottom>
				<img height=22 src=<?php echo APP_URL_PUBLIC?>img/boletos/3.png width=2 border=0>
			</td>
			<td class=ld align=right width=453 valign=bottom>
				<span class=ld>
					<span class="campotitulo">
						<?php echo $dadosboleto["linha_digitavel"]?>
					</span>
				</span>
			</td>
		</tr>
		<tbody>
			<tr>
				<td colspan=5><img height=2 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=666 border=0></td>
			</tr>
		</tbody>
	</table>

	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=298 height=13>Cedente</td>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=126 height=13>Ag&eacute;ncia/C&oacute;digo do Cedente</td>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=34 height=13>Esp&eacute;cie</td>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=53 height=13>Quantidade</td>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=120 height=13>Nosso n&uacute;mero</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=298 height=12>
					<span class="campo"><?php echo $dadosboleto["cedente"]; ?></span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=126 height=12>
					<span class="campo"><?php echo $dadosboleto["agencia_codigo"]?></span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=34 height=12>
					<span class="campo"><?php echo $dadosboleto["especie"]?></span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=53 height=12>
					<span class="campo"><?php echo $dadosboleto["quantidade"]?></span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top align=right width=120 height=12>
					<span class="campo"><?php echo $dadosboleto["nosso_numero"]?></span>
				</td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=298 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=298 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=126 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=126 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=34 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=34 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=53 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=53 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=120 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=120 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top colspan=3 height=13>N&uacute;mero do documento</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=132 height=13>CPF/CNPJ</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=134 height=13>Vencimento</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>Valor documento</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top colspan=3 height=12><span class="campo">
  <?php echo $dadosboleto["numero_documento"]?>
  </span></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=132 height=12><span class="campo">
  <?php echo $dadosboleto["cpf_cnpj"]?>
  </span></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=134 height=12><span class="campo">
  <?php echo $dadosboleto["data_vencimento"]?>
  </span></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=180 height=12><span
					class="campo">
  <?php echo $dadosboleto["valor_boleto"]?>
  </span></td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=72 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=72 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=132 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=132 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=134 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=134 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=113 height=13>(-) Desconto /
					Abatimentos</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=112 height=13>(-) Outras dedu&ccedil;&otilde;es</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=113 height=13>(+) Mora / Multa</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=113 height=13>(+) Outros acr&eacute;scimos</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>(=) Valor cobrado</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=112 height=12></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=180 height=12></td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=112 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=112 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=659 height=13>Sacado</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=659 height=12><span class="campo">
  <?php echo $dadosboleto["sacado"]?>
  </span></td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=659 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=659 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct width=7 height=12></td>
				<td class=ct width=564>Demonstrativo</td>
				<td class=ct width=7 height=12></td>
				<td class=ct width=88>Autentica&ccedil;&atilde;o mec&acirc;nica</td>
			</tr>
			<tr>
				<td width=7></td>
				<td class=cp width=564>
					<span class="campo"><?php echo $dadosboleto["demonstrativo1"]?><br>
						<?php echo $dadosboleto["demonstrativo2"]?><br>
						<?php echo $dadosboleto["demonstrativo3"]?><br>
					</span>
				</td>
				<td width=7></td>
				<td width=88></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tbody>
			<tr>
				<td width=7></td>
				<td width=500 class=cp><br>
				<br>
				<br></td>
				<td width=159></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=ct width=666></td>
		</tr>
		<tbody>
			<tr>
				<td class=ct width=666>
					<div align=right>Corte na linha pontilhada</div>
				</td>
			</tr>
			<tr>
				<td class=ct width=666><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/6.png width=665
					border=0></td>
			</tr>
		</tbody>
	</table>
	<br>
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=cp width=150><span class="campo"><IMG
					src="<?php echo APP_URL_PUBLIC?>img/boletos/logobradesco.jpg" width="150" height="40" border=0></span></td>
			<td width=3 valign=bottom><img height=22 src=<?php echo APP_URL_PUBLIC?>img/boletos/3.png
				width=2 border=0></td>
			<td class=cpt width=58 valign=bottom><div align=center>
					<font class=bc><?php echo $dadosboleto["codigo_banco_com_dv"]?></font>
				</div></td>
			<td width=3 valign=bottom><img height=22 src=<?php echo APP_URL_PUBLIC?>img/boletos/3.png
				width=2 border=0></td>
			<td class=ld align=right width=453 valign=bottom><span class=ld> <span
					class="campotitulo">
<?php echo $dadosboleto["linha_digitavel"]?>
</span></span></td>
		</tr>
		<tbody>
			<tr>
				<td colspan=5><img height=2 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=666 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=472 height=13>Local de pagamento</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>Vencimento</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=472 height=12>Pag&aacute;vel em qualquer
					Banco at&eacute; o vencimento</td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=180 height=12><span
					class="campo">
  <?php echo $dadosboleto["data_vencimento"]?>
  </span></td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=472 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=472 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=472 height=13>Cedente</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>Ag&ecirc;ncia/C&oacute;digo cedente</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=472 height=12><span class="campo">
  <?php echo $dadosboleto["cedente"]?>
  </span></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top align=right width=180 height=12><span
					class="campo">
  <?php echo $dadosboleto["agencia_codigo"]?>
  </span></td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=472 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=472 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=113 height=13>Data do documento</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=113 height=13>N<u>o</u> documento
				</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=62 height=13>Esp&eacute;cie doc.</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=34 height=13>Aceite</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=122 height=13>Data processamento</td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>Nosso n&uacute;mero</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=113 height=12>
					<div align=left>
						<span class="campo">
							<?php echo $dadosboleto["data_documento"]?>
  						</span>
					</div>
				</td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=113 height=12><span class="campo">
    <?php echo $dadosboleto["numero_documento"]?>
    </span></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=62 height=12>
							<?php echo $dadosboleto["especie_doc"]?>
				</td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=34 height=12><div align=left>
						<span class="campo">
 <?php echo $dadosboleto["aceite"]?>
 </span>
					</div></td>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=122 height=12><div align=left>
						<span class="campo">
   <?php echo $dadosboleto["data_processamento"]?>
   </span>
					</div></td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top align=right width=180 height=12>
					<span class="campo">
						<?php echo $dadosboleto["nosso_numero"]?>
					</span>
				</td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=113 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=113 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=62 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=62 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=34 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=34 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=122 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=122 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top colspan="3" height=13>
					Uso do banco
				</td>
				<td class=ct valign=top height=13 width=7>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=83 height=13>
					Carteira
				</td>
				<td class=ct valign=top height=13 width=7>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=53 height=13>
					Esp&eacute;cie
				</td>
				<td class=ct valign=top height=13 width=7>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=123 height=13>
					Quantidade
				</td>
				<td class=ct valign=top height=13 width=7>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=72 height=13>
					Valor Documento
				</td>
				<td class=ct valign=top width=7 height=13>
					<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=ct valign=top width=180 height=13>
					(=) Valor documento
				</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td valign=top class=cp height=12 colspan="3">
					&nbsp;
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=83>
						<span class="campo">
							<?php echo $dadosboleto["carteira"]?>
						</span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=53>
						<span class="campo">
							<?php echo $dadosboleto["especie"]?>
						</span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=123>
					<span class="campo">
						<?php echo $dadosboleto["quantidade"]?>
					</span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top width=72>
					<span class="campo">
						<?php echo $dadosboleto["valor_unitario"]?>
					</span>
				</td>
				<td class=cp valign=top width=7 height=12>
					<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
				</td>
				<td class=cp valign=top align=right width=180 height=12>
					<span class="campo">
						<?php echo $dadosboleto["valor_boleto"]?>
					</span>
				</td>
			</tr>
			<tr>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=75 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=31 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=31 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=83 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=83 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=53 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=53 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=123 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=123 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=72 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=72 border=0>
				</td>
				<td valign=top width=7 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
				</td>
				<td valign=top width=180 height=1>
					<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0>
				</td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tbody>
			<tr>
				<td align=left width=10>
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13>
									<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
								</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=1 border=0></td>
							</tr>
						</tbody>
					</table>
				</td>
				<td valign=top width=468 rowspan=5>
					<font class=ct>Instru&ccedil;&otilde;es (Texto de responsabilidade do cedente)</font>
					<br>
					<br><span class=cp><FONT class=campo><?php echo $dadosboleto["instrucoes1"];?><br>
							<?php echo $dadosboleto["instrucoes2"];?><br>
							<?php echo $dadosboleto["instrucoes3"];?><br>
							<?php echo $dadosboleto["instrucoes4"];?>
						</FONT>
					<br>
					<br>
					</span>
				</td>
				<td align=left width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=8 height=13 align="left">
									<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
								</td>
								<td class=ct valign=top width=180 height=13>(-) Desconto / Abatimentos</td>
							</tr>
							<tr>
								<td class=cp valign=top width=8 height=12>
									<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
								</td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							<tr>
								<td valign=top width=8 height=1>
									<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0>
								</td>
								<td valign=top width=180 height=1>
									<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td align=left width=10>
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13>
									<img height=13 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
								</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12>
									<img height=12 src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0>
								</td>
							</tr>
							<tr>
								<td valign=top width=7 height=1>
									<img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=1 border=0>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td align=left width=188><table cellspacing=0 cellpadding=0
						border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=ct valign=top width=180 height=13>(-) Outras dedu&ccedil;&otilde;es</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0></td>
								<td valign=top width=180 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
							</tr>
						</tbody>
					</table></td>
			</tr>
			<tr>
				<td align=left width=10>
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=1 border=0></td>
							</tr>
						</tbody>
					</table>
				</td>
				<td align=left width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=ct valign=top width=180 height=13>(+) Mora / Multa</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0></td>
								<td valign=top width=180 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td align=left width=10><table cellspacing=0 cellpadding=0 border=0
						align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=1 border=0></td>
							</tr>
						</tbody>
					</table></td>
				<td align=left width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=ct valign=top width=180 height=13>(+) Outros
									acr&eacute;scimos</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							<tr>
								<td valign=top width=7 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=7 border=0></td>
								<td valign=top width=180 height=1><img height=1
									src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td align=left width=10><table cellspacing=0 cellpadding=0 border=0
						align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
							</tr>
						</tbody>
					</table></td>
				<td align=left width=188><table cellspacing=0 cellpadding=0
						border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><img height=13
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=ct valign=top width=180 height=13>(=) Valor cobrado</td>
							</tr>
							<tr>
								<td class=cp valign=top width=7 height=12><img height=12
									src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
						</tbody>
					</table></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tbody>
			<tr>
				<td valign=top width=666 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=666 border=0></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=659 height=13>Sacado</td>
			</tr>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=659 height=12><span class="campo">
<?php echo $dadosboleto["sacado"]?>
</span></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=cp valign=top width=7 height=12><img height=12
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=659 height=12><span class="campo">
<?php echo $dadosboleto["endereco1"]?>
</span></td>
			</tr>
		</tbody>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=cp valign=top width=472 height=13><span class="campo">
  <?php echo $dadosboleto["endereco2"]?>
  </span></td>
				<td class=ct valign=top width=7 height=13><img height=13
					src=<?php echo APP_URL_PUBLIC?>img/boletos/1.png width=1 border=0></td>
				<td class=ct valign=top width=180 height=13>C&oacute;d. baixa</td>
			</tr>
			<tr>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=472 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=472 border=0></td>
				<td valign=top width=7 height=1><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png
					width=7 border=0></td>
				<td valign=top width=180 height=1><img height=1
					src=<?php echo APP_URL_PUBLIC?>img/boletos/2.png width=180 border=0></td>
			</tr>
		</tbody>
	</table>
	<TABLE cellSpacing=0 cellPadding=0 border=0 width=666>
		<TBODY>
			<TR>
				<TD class=ct width=7 height=12></TD>
				<TD class=ct width=409>Sacador/Avalista</TD>
				<TD class=ct width=250><div align=right>
						Autentica&ccedil;&atilde;o mec&acirc;nica - <b class=cp>Ficha de Compensa&ccedil;&atilde;o</b>
					</div></TD>
			</TR>
			<TR>
				<TD class=ct colspan=3></TD>
			</tr>
		</tbody>
	</table>
	<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
		<TBODY>
			<TR>
				<TD vAlign=bottom align=left height=50><?php fbarcode($dadosboleto["codigo_barras"]); ?>
 </TD>
			</tr>
		</tbody>
	</table>
	<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
		<TR>
			<TD class=ct width=666></TD>
		</TR>
		<TBODY>
			<TR>
				<TD class=ct width=666><div align=right>Corte na linha pontilhada</div></TD>
			</TR>
			<TR>
				<TD class=ct width=666><img height=1 src=<?php echo APP_URL_PUBLIC?>img/boletos/6.png width=665
					border=0></TD>
			</tr>
		</tbody>
	</table>
</page>