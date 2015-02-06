Auto Number Extension for Yii 1
===============================

Installation
------------

Download extension and extract to extensions/autonumber.


Usage
-----

Prepare required table by execute yii migrate.
```
yii migrate --migrationPath=ext.autonumber
```

Once the extension is installed, simply modify your active record class:

```php
public function behavior()
{
	return array(
		array(
			'class' => 'ext.autonumber.MdmAutonumberBehavior',
			'attribute' => 'sales_num', // required
			'group' => 'sales', // required, unique
			'value' => 'SA-'.date('Y-m-d').'?' , // format auto number. '?' will be replaced with generated number
			'digit' => 4 // optional, default to null. 
		),
		...
	);
}
```
