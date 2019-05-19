# File: detect_row_level_data_entry_errors.py
# Program will produce a diagnostic report that shows data entry errors
# that cause row totals in the data to be out of balance.


def main():
    # prompt for input filename#
    input_filename = input('Please enter the input filename: ')
    # open input file using encoding utf8#
    infile = open(input_filename, 'r', encoding='utf8')
    # print report heading#
    print('\n{0:^50}'.format('Row-Level Data Entry Errors'))
    print('\n{0:<10}{1:>10}{2:>10}{3:>10}{4:>10}'.format(
        'Age Group', 'Males', 'Females', 'Total', 'Error'))
    # for line in input file:#
    for line in infile:
        # split line into individual strings#
        age_group, males, females, total = line.split()
        # convert stings to ints as appropriate#
        males = int(males)
        females = int(females)
        total = int(total)
        error = (males + females) - total
        # print line for a row (including error)#
        print('{0:<10}{1:>10,}{2:>10,}{3:>10,}{4:>10,}'.format(
            age_group, males, females, total, error))

    # close file#
    infile.close()


main()
