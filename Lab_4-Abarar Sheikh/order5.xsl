<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/orders">
        <html>
            <head>
                <title>Order Status</title>
            </head>
        </html>
        <body>
            <h2>Order Status</h2>
            <xsl:for-each select="//item[@instock='Y']">
                    <h3>Items are in stock</h3>
                         <ul>

                            <li>Name : <xsl:value-of select="name"/></li>
                             <li>Price : <xsl:value-of select="price"/></li>
                             <li>Quantity :<xsl:value-of select="qty"/> </li>


                        </ul>


            </xsl:for-each>
        </body>
    </xsl:template>

</xsl:stylesheet>