<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/catalog">
        <html>
            <head>
                <title> Product list</title>
            </head>
            <body>
                <h1> Product Listing</h1>
                <h2>Total products : 8</h2>
                <ol>
                <xsl:for-each select="product">

                    <xsl:sort select="." />

                        <li>

                            <xsl:choose>
                                <xsl:when test="@sku &gt; 100000">
                                    <SPAN STYLE="font-weight:bold">
                                        <xsl:value-of select="." />
                                        (<xsl:value-of select="@sku"/>)

                                    </SPAN>


                                </xsl:when>


                            <xsl:when test="@sku &gt; 50000">
                                <SPAN STYLE="font-style: italic">

                                        <xsl:value-of select="." />
                                        (<xsl:value-of select="@sku"/>)


                                </SPAN>

                            </xsl:when>
                            <xsl:otherwise>
                                <xsl:value-of select="." />
                                (<xsl:value-of select="@sku"/>)
                            </xsl:otherwise>
                            </xsl:choose>
                        </li>


                </xsl:for-each>
            </ol>
            </body>
        </html>

    </xsl:template>

</xsl:stylesheet>