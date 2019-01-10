[{$smarty.block.parent}]

<b>[{oxmultilang ident="D3_ORDERPRINT_PRINT"}]: </b>
<a href="[{$edit->d3GetPrintOrderPreviewLink()}]" class="link" target="_blank"
   onclick="window.open(this.href, '_blank', 'width=630,height=800,status=yes,scrollbars=yes,resizable=yes'); return false">
    [{oxmultilang ident="D3_ORDERPRINT_LINK"}]
</a>
<br>
