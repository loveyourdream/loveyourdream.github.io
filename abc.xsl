<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <h2> Library books Details </h2>
  <body>

  <table border="1">
    <tr bgcolor="#bdd5fc">
      <th>Accession_no</th>
      <th>ISBN</th>
	  <th>Edition</th>
	  <th>Volume</th>
	  <th>Title</th>
	  <th>No_of_Books</th>
    </tr>
    <xsl:for-each select="college/Books/Book">
    <tr>
      <td><xsl:value-of select="Accession_no"/></td>
      <td><xsl:value-of select="ISBN"/></td>
	  <td><xsl:value-of select="Edition"/></td>
	  <td><xsl:value-of select="Volume"/></td>
	  <td><xsl:value-of select="Title"/></td>
	  <td><xsl:value-of select="No_of_Books"/></td>
    </tr>
   </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>



   