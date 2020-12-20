<!DOCTYPE html>
<html>
<body>

<h2>Success</h2>
<p>
    Tu pago se ha realizado con éxito.
</p>

<dl>
  <dt>Payment ID:</dt>
  <dd><?php echo $_GET['collection_id'] ?></dd>
  <dt>Estado:</dt>
  <dd><?php echo $_GET['collection_status'] ?></dd>
  <dt>Referencia:</dt>
  <dd><?php echo $_GET['external_reference'] ?></dd>
  <dt>Tipo de pago:</dt>
  <dd><?php echo $_GET['payment_type'] ?></dd>
  <dt>Preference ID:</dt>
  <dd><?php echo $_GET['preference_id'] ?></dd>
  <dt>Sitio ID:</dt>
  <dd><?php echo $_GET['site_id'] ?></dd>
  <dt>Modo de procesamiento:</dt>
  <dd><?php echo $_GET['processing_mode'] ?></dd>
  <dt>Merchant ID:</dt>
  <dd><?php echo $_GET['merchant_account_id'] ?></dd>
</dl>

</body>
</html>