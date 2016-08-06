<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/order">
        <html>
            <head>
                <title>Order details</title>
            </head>
            <body>
                <h1>Order details</h1>
                <p>Company Name :<xsl:value-of select="companyName" /></p>
                <p>item :<xsl:value-of select="item" /></p>
                <p>quantity :<xsl:value-of select="quantity" /></p>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>