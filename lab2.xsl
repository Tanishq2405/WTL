<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
				<h2>Orders</h2>
				<table border="2">
					<tr bgcolor="skyblue">
						<th>Order ID</th>
						<th>Description</th>
						<th>Request Date</th>
						<th>Movie ID</th>
						<th>Movie</th>
						<th>Release Date</th>
						<th>Genre</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>

					<xsl:for-each select="orders/order">
						<tr bgcolor="salmon">
							<td><xsl:value-of select="orderid"/></td>
							<td><xsl:value-of select="description"/></td>
							<td><xsl:value-of select="requestdate"/></td>
							<td><xsl:value-of select="lineitem/movie/movieid"/></td>
							<td><xsl:value-of select="lineitem/movie/name"/></td>
							<td><xsl:value-of select="lineitem/movie/releasedate"/></td>
							<td><xsl:value-of select="lineitem/movie/genre"/></td>
							<td><xsl:value-of select="lineitem/quantity"/></td>
							<td><xsl:value-of select="lineitem/price"/></td>
						</tr>
					</xsl:for-each>
				</table>

				<h2>Actors</h2>
				<table border="2">
					<tr bgcolor="thistle">
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
					</tr>

					<xsl:for-each select="orders/order/lineitem/movie/actors/actor">
						<tr bgcolor="lightpink">
							<td><xsl:value-of select="fname"/></td>
							<td><xsl:value-of select="lname"/></td>
							<td><xsl:value-of select="age"/></td>
						</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>