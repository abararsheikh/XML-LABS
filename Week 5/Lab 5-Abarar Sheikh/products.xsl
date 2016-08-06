<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head> <title> Product information sorted by category </title></head>
            <body>
            <h1>Product information sorted by category</h1>
            </body>
        </html>
        <table border = "1">
            <tr>
                <th>category</th>
                <th>name</th>
                <th>price</th>
            </tr>

            <xsl:apply-templates select="catalog/row">
                <xsl:sort select="category" order="ascending"  data-type="text"></xsl:sort>

            </xsl:apply-templates>
        </table>
    </xsl:template>
    <xsl:template match="row">


        <xsl:for-each select=".">
           <!-- <xsl:sort select="." order="ascending" data-type="text"/> -->
            <tr>
                <td><xsl:value-of select="category"/></td>
                <td>

                    <xsl:for-each select="product">
                      <!--  <xsl:sort select="." order="ascending" data-type="text"/> -->

                        <xsl:value-of select="name"/>
                    </xsl:for-each>
                </td>
                <td>
                    <xsl:for-each select="product">
                      <!--  <xsl:sort select="." order="ascending" data-type="text"/> -->

                        <xsl:value-of select="format-number(price, '#.00')"/>
                    </xsl:for-each>
                </td>
            </tr>
        </xsl:for-each>

    </xsl:template>

</xsl:stylesheet>

