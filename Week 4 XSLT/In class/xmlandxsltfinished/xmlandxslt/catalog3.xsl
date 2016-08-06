<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/catalog">
        <xsl:for-each select="cd">
            <xsl:choose>
                <xsl:when test="year = 2001">


                        <h1>Catalog list</h1>
                        <p>Title : <xsl:value-of select="title" /></p>
                        <p>comapny : <xsl:value-of select="company" /> </p>
                        <p>price : <xsl:value-of select="./price" /></p>
                        <p>year : <xsl:value-of select="year" /></p>
                            <p>website : <xsl:value-of select="website" /></p>

                            <xsl:variable name="url" select="website" />
                            <p><a href="{$url}"><xsl:value-of select="website" /></a></p>
                </xsl:when>
                <xsl:when test="year = 2002">
                    <p style="color:green"><xsl:value-of select="title" /></p>
                </xsl:when>
                <xsl:otherwise>
                    <p style="color:red"><xsl:value-of select="title" /></p>
                </xsl:otherwise>

            </xsl:choose>
        </xsl:for-each>
    </xsl:template>

</xsl:stylesheet>