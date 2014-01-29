	<div class='container'>

	

			<div class="row">

				<div style ='border-bottom:1px solid #ccc;border-right:1px solid #ccc;' class="col-xs-11 border-radio">

					<div class=" col-xs-7">
						<p> <strong> Ricardo Alba Castellanos </strong> </p>
						<p>Campanario #43 Col. Villas de la Hacienda</p>		
						<p>Atizapan de Zaragoza , Estado de Mexico</p>
						<p>AACR8601031Y7</p>
						<p>55-58871613</p>
					</div>

				<div class="col-xs-12" style="margin-left:180px;">
					<p> <strong> FOLIO <?php echo $folio; ?> </strong></p>
				</div>
			
				</div>			
			
			</div>

				<!--

			nombre
			calle
			colonia
			delegacion
			codigo_postal
			rfc
			folio
			fecha_factura
			concepto
			cantidad
			iva
			sub_total
			iva_retenido
			isr
			total_pagado

			-->

			<div class="row">

				<div class="col-xs-7">
					
					<div style ='border-bottom:1px solid #ccc;' class="border-radio col-xs-12">
						<p><strong>FECHA:</strong><span class="float-right"><?php echo $fecha_factura; ?></span></p>
						<p><strong>RECIBI DE:</strong><span class="float-right"><?php echo $nombre; ?></span></p>	
						<p><strong>DIRECCION:</strong><span class="float-right"><?php echo $calle.$colonia.$delegacion; ?></span></p>	
						<p><strong>R.F.C:</strong><span class="float-right"><?php echo $rfc; ?></span></p>
					</div>

				</div>

				<div style="margin-left:30px;" class="col-xs-4 pay-info">
					
					<div style ='border-bottom:1px solid #ccc;border-left:1px solid #ccc;' class="border-radio col-xs-12">
						<p><strong>CANTIDAD:</strong>
							<span class="float-right"> $ <?php echo $cantidad; ?></span></p>
						<p><strong>I.V.A:</strong>
							<span class="float-right"> $ <?php echo $iva; ?></span></p>
						<p><strong>SUB-TOTAL:</strong>
							<span class="float-right"> $ <?php echo $sub_total; ?></span></p>			
					</div>		

					<div style ='border-bottom:1px solid #ccc;border-left:1px solid #ccc;' class="border-radio">
						<p><strong>I.V.A:</strong>
							<span class="float-right"> $ <?php echo $iva_retenido; ?></span></p>
						<p><strong>I.S.R:</strong>
							<span class="float-right"> $ <?php echo $isr; ?></span></p>
						<p><strong>TOTAL PAGADO:</strong>
							<span class="float-right"> $ <?php echo $total_pagado; ?></span></p>
					</div>	
				
				</div>
				
			</div>

			<div class="row">
	
				<div class="col-xs-10 border-radio " style="border:1px solid #ccc;"  >
					<p><strong>CONCEPTO</strong></p>
					<p style='margin-left:100px;'>Honorarios</p>
				</div>
			
			</div>

			<div class="row">
				
			</div>

			<div class="row">
				<div class="col-xs-2">
					<img src="./uploads/imgSat/25147175_AACR8601031Y7.png" alt="" style='width:90px;'>
				</div>
				<div class="col-xs-8 border-radio" style='font-size:10px;'>
				
					<p>La reproducción apócrifa de este comprobante constituye un delito en los terminos de las disposiciones fiscales</p>
					<p>Recibos de Honorarios . Folio del 1 al 100, elaborados el 3 de Junio del  2013, Numero de aprobación 25147175.</p>					
					<p>Este comprobante tendra una vigencia de dos años a partir de su numero de aprobacion 03/06/2013	
						Impuesto retenido de conformidad con valor del impuesto al valor agregado. Pago en una sola exhibición. Efectos fiscales al pago.</p>
					
				
				</div>
			</div>

			<div style="border-top:1px dashed #ccc;" class="row col-xs-12">
				<span style="margin-left:300px;padding:2px;">Original</span>
			</div>
	</div>
</body>
</html>
