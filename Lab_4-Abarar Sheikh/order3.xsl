<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/orders">
        <html>
            <head>
                <title>Order Status</title>
            </head>
        </html>
        <body>
            <h2>Order Status</h2>
            <xsl:for-each select="order">
                <p>Customer number: <xsl:value-of select="customerid"/></p>
                <xsl:for-each select="item">
                    <ul>

                        <li><xsl:value-of select="@itemid"/>:
                            <xsl:value-of select="name"/>
                        </li>

                    </ul>

                </xsl:for-each>

            </xsl:for-each>

        </body>


    </xsl:template>

</xsl:stylesheet>