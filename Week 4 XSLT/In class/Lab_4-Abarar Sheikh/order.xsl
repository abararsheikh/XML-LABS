<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/orders">


        <xsl:for-each select="order">
            <h1>List of customers</h1>
            <h2>Order</h2>
            <p>Customer id: <xsl:value-of select="customerid" /> </p>
            <p>Status: <xsl:value-of select="status" /> </p>
            <xsl:for-each select="item">
                <h3>Items</h3>
                <p>In stock : <xsl:value-of select="@instock" /></p>
                <p>Item id : <xsl:value-of select="@itemid" /></p>
                <p>Name: <xsl:value-of select="name" /> </p>
                <p>Price: <xsl:value-of select="price" /> </p>
                <p>Quantity: <xsl:value-of select="qty" /> </p>
            </xsl:for-each>

        </xsl:for-each>

        

   </xsl:template>
    
        
</xsl:stylesheet>