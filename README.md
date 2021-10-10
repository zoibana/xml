# Xml\Element

`zoibana\Xml\Element` class extends the SimpleXmlElement class and adds few new methods

## Initialization

```xml
 $xml = new zoibana\Xml\Element("
  <xml>
    <offer internal-id="30192">
      <price>123036</price>
    </offer>
    <offer internal-id="30193">
      <price>32412</price>
    </offer>
    <offer internal-id="30194">
      <price>53123</price>
    </offer>
    <offer internal-id="30195">
      <price>9676253</price>
    </offer>
    <offer internal-id="30196">
      <price>13687</price>
    </offer>
  </xml>
 ");
```

## Added methods

### first()
retrieves the first element of requested tag elements list

```php
 $firstOfferPrice = (int) $xml->offer->first()->price;
```

### last()
retrievs the last element of requested tag elements list

```php
 $lastOfferPrice = (int) $xml->offer->last()->price;
```

### index($index) 
retrieves element with index $index of requested tag elements list

```php
 $thirdOfferPrice = (int) $xml->offer->index(2)->price;
```

### attr($attr)
returns the attribute value

```php
 $idAttribute = $xml->offer->attr('id');
```

### column($tagname)`
returns the array of tag values for each element

```php
 $arrayOfOfferPrices = $xml->offer->column('price');
```

### attrColumn($tagname)
returns the array of attribute values for each element

```php
 $arrayAttributeIds = $xml->offer->attrColumn('id');
```
