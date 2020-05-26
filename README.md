Write string preparation function, which fill template in with data from specified object<br>

Data object <br>
user: {<br>
id: 20<br>
type_id: 'test'<br>
}<br>

Template: /api/items/%id%/%type_id%<br>

Expected result: /api/items/20/test<br>
