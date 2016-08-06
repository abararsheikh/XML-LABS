<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/orders">

        <html>
            <head>
                <title>Order Status</title>
            </head>
        </html>
        <body>
            <xsl:for-each select="//item[@instock='N']">
            <h2>Order Status</h2>


                <ul>

                    <li><i>
                        <xsl:value-of select="@itemid"/>
                       :  <xsl:value-of select="name"/></i></li>

                </ul>


            </xsl:for-each>

        </body>

    </xsl:template>

</xsl:stylesheet>