<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/orders">
          <h1> list of customer id values</h1>
         <xsl:for-each select="order">
             <ul>
             <li> <xsl:value-of select="customerid" /> </li>
             </ul>
                     
        </xsl:for-each>
        
               
    </xsl:template>
    
</xsl:stylesheet>