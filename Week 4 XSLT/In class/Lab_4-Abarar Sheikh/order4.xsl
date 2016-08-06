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
                <xsl:if test="status='pending'">
                    <p>Customer number: <xsl:value-of select="customerid"/></p>
                    <p>Status : <xsl:value-of select="status"/></p>
                    <xsl:for-each select="item">
                        <ul>

                            <li><xsl:value-of select="@itemid"/>:
                                <xsl:value-of select="name"/>
                            </li>

                        </ul>

                    </xsl:for-each>


                </xsl:if>

            </xsl:for-each>
        </body>

    </xsl:template>

</xsl:stylesheet>