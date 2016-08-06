<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<!-- set up the main page container -->
<xsl:template match="/">
<html>
<head>
</head>
<body>
<xsl:apply-templates />
</body>
</html>
</xsl:template>

<!-- look for the list node -->
<xsl:template match="/list" xml:space="preserve">
<h3><font face="Arial">Bestsellers</font></h3>

<!-- iterate through the item nodes under the list node -->
<ul>
<xsl:for-each select="item">
<li>
<font face="Arial"><b><xsl:value-of select="title" /></b> - <xsl:value-of select="author" /></font>
<br />
<font face="Arial"><i><xsl:value-of select="blurb" /></i></font>
<p />
</li>
</xsl:for-each>
</ul>

</xsl:template>

</xsl:stylesheet>