function AddGoldPrice(type, Rate_buy,Rate_sell)
{
	document.writeln('<tr><td class="ctd"  bgcolor="#ffffff" align="center">',type,'</td><td class="ctd" align="center"  bgcolor="#ffffff">',Rate_buy,'</td><td align="center" class="ctd"  bgcolor="#ffffff">',Rate_sell,'</td></tr>');
}
document.writeln('<tr><td class="ctd" align="center"  bgcolor="#ffffff">Loại</td><td class="ctd"  align="center"  bgcolor="#ffffff">Mua vào</td><td class="ctd"  align="center"  bgcolor="#ffffff">Bán ra</td></tr>');
if (typeof(vGoldSjcBuy) !='undefined') AddGoldPrice('SJC',vGoldSjcBuy,vGoldSjcSell);
if (typeof(vGoldSbjBuy) !='undefined') AddGoldPrice('SBJ',vGoldSbjBuy,vGoldSbjSell);
