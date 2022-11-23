from sqlconnection import get_sql_connection


def get_all_products(connection):

    cursor = connection.cursor()

    query = "SELECT * FROM kaysmedia.products"

    cursor.execute(query)

    response = []

    for (Product_ID, Name, Package, Price) in cursor:
        response.append(
            {
                'Product_ID': Product_ID,
                'Name': Name,
                'Package': Package,
                'Price': Price
            }
        )

    connection.close()
    return response


if __name__ == '__main__':
    connection = get_sql_connection
    print(get_all_products(connection))
