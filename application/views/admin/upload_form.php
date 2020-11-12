<html>

<head>
    <title>Upload Form</title>
</head>

<body>

    <?php echo $error; ?>

    <?php echo form_open_multipart('upload/uploadFotoProduk/' . $produk['id_produk']); ?>

    <input type="file" name="foto_produk" size="20" />

    <br /><br />

    <input type="submit" value="upload" />

    </form>

</body>

</html>