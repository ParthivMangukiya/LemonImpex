'SELECT {Event::TAB_NAME}.{Event::COL_ID}, {Event::COL_NAME} , {EventImage::COL_URL}
FROM {Event::TAB_NAME}
LEFT JOIN {EventImage::TAB_NAME} ON {Event::TAB_NAME}.{Event::COL_ID} = {EventImage::TAB_NAME}.{Event::COL_EVENT_ID}
AND {EventImage::TAB_NAME}.{EventImage::COL_ID} = (
    SELECT {EventImage::COL_ID}
    FROM {EventImage::TAB_NAME} ei WHERE {Event::TAB_NAME}.{Event::COL_ID} = ei.{Event::COL_EVENT_ID}
    LIMIT 1
)
LIMIT 3'