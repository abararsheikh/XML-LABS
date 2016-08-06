<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <table border = "1">
        <tr>
            <th>Company name</th>
            <th>Adress</th>
            <th>Contact</th>
        </tr>

    <xsl:apply-templates select="customers/customer">
    <xsl:sort select="address/country" data-type="text"></xsl:sort>

    </xsl:apply-templates>
        </table>
    </xsl:template>
    <xsl:template match="customer">


            <xsl:for-each select=".">
                <xsl:sort select="." order="ascending" data-type="text"/>
                <tr>
                    <td><xsl:value-of select="company"/>
                        (<xsl:value-of select="./@id"/>)

                    </td>
                    <td>

                    <xsl:for-each select="address">
                   <xsl:sort select="." order="ascending" data-type="text"/>

                    <xsl:value-of select="street"/>,<br/>
                        <xsl:value-of select="city"/>,
                        <xsl:value-of select="zip"/><br/>
                        <xsl:value-of select="country"/>.
                    </xsl:for-each>
                    </td>

                    <td>

                        <xsl:for-each select="contact">
                            <xsl:sort select="." order="ascending" data-type="text"/>

                           Name: <xsl:value-of select="name"/><br/>
                            <xsl:choose>
                                <xsl:when test="title='Sales Representative'">
                                    <SPAN STYLE="color:red">
                                    Title: <xsl:value-of select="title"/><br/>
                                    </SPAN>
                                </xsl:when>
                                <xsl:when test="title='Sales Agent'">
                                    <SPAN STYLE="color:red">
                                        Title: <xsl:value-of select="title"/><br/>
                                    </SPAN>
                                </xsl:when>
                                <xsl:otherwise>
                                    Title: <xsl:value-of select="title"/><br/>
                                </xsl:otherwise>
                            </xsl:choose>


                           Phone: <xsl:value-of select="phone"/><br/>
                            <xsl:if test="fax">
                                Fax: <xsl:value-of select="fax"/>
                            </xsl:if>

                        </xsl:for-each>
                    </td>

                </tr>
           </xsl:for-each>

    </xsl:template>

</xsl:stylesheet>