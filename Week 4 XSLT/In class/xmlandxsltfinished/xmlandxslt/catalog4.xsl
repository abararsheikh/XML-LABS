<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/catalog">
<xsl:for-each select="cd">
    <xsl:apply-templates select="title" />
    <xsl:apply-templates select="country" />
    <xsl:apply-templates select="title" />

</xsl:for-each>
</xsl:template>
<xsl:template match="title" >
<p style="color:green"><xsl:value-of select="." /></p>
</xsl:template>
<xsl:template match="country">
<p style="color:red"><xsl:value-of select="." /></p>
</xsl:template>

        </xsl:stylesheet>